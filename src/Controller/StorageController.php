<?php

namespace App\Controller;

use App\Service\GoogleCloudStorageService;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Component\HttpKernel\Attribute\MapQueryParameter;

use function Symfony\Component\Clock\now;

final class StorageController extends AbstractController
{
    #[Route('/storage/getImages', name: 'app_user_folder_images')]
    public function getImages(GoogleCloudStorageService $gcs, Request $request): JsonResponse
    {
        $data = json_decode($request->getContent(), true);

        $apiSecretKey = $_ENV['API_SECRET_KEY'] ?? null;
        if ($data['secret'] !== $apiSecretKey) {
            return $this->json(['error' => 'Unauthorized'], Response::HTTP_UNAUTHORIZED);
        }

        $images = $gcs->getImages($data['user'],$data['folder']);

        return new JsonResponse([
            'images' => $images
        ], Response::HTTP_OK);
    }

    #[Route('/storage/getTextFile', name: 'app_user_folder_text')]
    public function getTextFile(GoogleCloudStorageService $gcs, Request $request): JsonResponse
    {
        $data = json_decode($request->getContent(), true);

        $apiSecretKey = $_ENV['API_SECRET_KEY'] ?? null;
        if ($data['secret'] !== $apiSecretKey) {
            return $this->json(['error' => 'Unauthorized'], Response::HTTP_UNAUTHORIZED);
        }

        $text = $gcs->getTextFile($data['user'],$data['folder']);

        return new JsonResponse([
            'text' => $text
        ], Response::HTTP_OK);
    }

    #[Route('/storage/getUserFolders', name: 'app_user_folders')]
    public function getUserFolders(GoogleCloudStorageService $gcs, Request $request): JsonResponse
    {
        $data = json_decode($request->getContent(), true);

        $apiSecretKey = $_ENV['API_SECRET_KEY'] ?? null;
        if ($data['secret'] !== $apiSecretKey) {
            return $this->json(['error' => 'Unauthorized'], Response::HTTP_UNAUTHORIZED);
        }

        $folders = $gcs->listUserFolders($data['user']);

        return new JsonResponse([
            'data' => $folders
        ], Response::HTTP_OK);
    }

    #[Route('/', name: 'app_home')]
    public function home(): JsonResponse
    {
        return $this->json(['error' => 'Unauthorized'], Response::HTTP_UNAUTHORIZED);
    }
}
