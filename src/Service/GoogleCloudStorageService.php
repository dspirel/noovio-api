<?php

namespace App\Service;

use Google\Cloud\Storage\StorageClient;
use Google\Cloud\Storage\StorageObject;
use Symfony\Component\HttpFoundation\File\UploadedFile;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
use function Symfony\Component\Clock\now;


class GoogleCloudStorageService
{
    private StorageClient $storage;
    private string $mainBucket = 'gcstorage-n8n';

    public function __construct(StorageClient $storage)
    {
        $this->storage = $storage;
    }

    public function listUserFolders(string $userFolder): array
    {
        $bucket = $this->storage->bucket($this->mainBucket);

        $prefix = rtrim($userFolder, '/') . '/';

        $options = [
            'prefix' => $prefix,
            'delimiter' => '.'
        ];

        $objects = $bucket->objects($options);
        $folders = [];

        foreach ($objects as $folder) {
            $f = str_replace($prefix, '', $folder->name());
            $f = rtrim($f, '/');
            if ($f !== '') $folders[] = $f;
        }

        return $folders;
    }

    public function getImages(string $user, string $folder): array
    {
        $bucket = $this->storage->bucket($this->mainBucket);

        $options = [
            'prefix' => $user . '/' . $folder . '/',
            'delimiter' => ''
        ];

        $objects = $bucket->objects($options);
        $files = [];
        $urlExpiration = now('+30 minutes');

        foreach ($objects as $object) {
            if (str_ends_with(strtolower($object->name()), '.jpg') ||
                str_ends_with(strtolower($object->name()), '.jpeg'))
                {
                    $files[] = $this->getSignedUrl($object->name(), $urlExpiration);
                }
        }

        return $files;
    }

    public function getSignedUrl(string $objectName, $expires, array $options = []): string
    {
        $bucket = $this->storage->bucket($this->mainBucket);
        $object = $bucket->object($objectName);

        $url = $object->signedUrl($expires, $options);

        return $url;
    }
    // public function listUserFiles(string $userId): array
    // {
    //     $bucket = $this->storage->bucket($this->bucketName);
    //     $objects = $bucket->objects(['prefix' => "$userId/"]);
    //     $urlExpiration = now('+30 minutes');

    //     $files = [];
    //     foreach ($objects as $object) {
    //         $files[] = [
    //             'name' => $object->name(),
    //             'url' => $this->getSignedUrl($object->name(), $urlExpiration),
    //         ];
    //     }

    //     return $files;
    // }

    // public function listUserImages(string $userId): array
    // {
    //     $bucket = $this->storage->bucket($this->bucketName);
    //     $objects = $bucket->objects(['prefix' => "$userId/"]);
    //     $urlExpiration = now('+30 minutes');

    //     $files = [];
    //     foreach ($objects as $object) {
    //         if (str_ends_with(strtolower($object->name()), '.jpg') ||
    //             str_ends_with(strtolower($object->name()), '.jpeg')) {
    //             $files[] = [
    //                 'name' => $object->name(),
    //                 'url' => $this->getSignedUrl($object->name(), $urlExpiration),
    //                 ];
    //             }
    //     }

    //     return $files;
    // }

    // public function deleteFile(string $filePath): void
    // {
    //     $bucket = $this->storage->bucket($this->bucketName);
    //     $object = $bucket->object($filePath);

    //     if ($object->exists()) {
    //         $object->delete();
    //     }
    // }

    // /**
    //  * List files in a Google Cloud Storage bucket, optionally filtered by extension.
    //  *
    //  * @param string $bucketName The name of the bucket
    //  * @param string $folder The folder path (e.g., 'uploads/') to filter by
    //  * @param string $extension The file extension to filter by (e.g., 'jpg')
    //  * @param array $options Additional options (e.g., prefix, delimiter)
    //  * @return array List of file names
    //  * @throws \RuntimeException If listing fails
    //  */
    // public function listFilesWithExtension(string $folder, string $extension): array
    // {
    //     try {
    //         $options = [];
    //         $bucket = $this->storage->bucket($this->bucketName);
    //         // if (!$bucket->exists()) {
    //         //     throw new \RuntimeException(sprintf('Bucket "%s" does not exist.', $bucketName));
    //         // }

    //         // Set prefix to filter by folder if provided
    //         if ($folder !== null) {
    //             $options['prefix'] = rtrim($folder, '/') . '/';
    //         }

    //         // Set delimiter to limit results to the specified folder
    //         $options['delimiter'] = '/';


    //         $objects = $bucket->objects($options);
    //         $fileNames = [];

    //         foreach ($objects as $object) {
    //             $fileName = $object->name();

    //             // Filter by extension if specified
    //             if ($extension !== null && !str_ends_with(strtolower($fileName), '.' . strtolower($extension))) {
    //                 continue;
    //             }

    //             $fileNames[] = $fileName;
    //         }

    //         return $fileNames;
    //     } catch (\Exception $e) {
    //         throw new \RuntimeException(sprintf('Failed to list files: %s', $e->getMessage()), 0, $e);
    //     }
    // }


    // public function uploadFile(string $localPath, string $destinationPath, bool $public = false): string
    // {
    //     $bucket = $this->storage->bucket($this->bucketName);

    //     $options = ['name' => $destinationPath];

    //     if ($public) {
    //         $options['predefinedAcl'] = 'publicRead';
    //     }

    //     $object = $bucket->upload(fopen($localPath, 'r'), $options);

    //     return sprintf('https://storage.googleapis.com/%s/%s', $this->bucketName, $destinationPath);
    // }
}
