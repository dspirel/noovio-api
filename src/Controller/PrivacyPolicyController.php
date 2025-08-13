<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

final class PrivacyPolicyController extends AbstractController
{
    #[Route('/fblogin', name: 'app_fblogin')]
    public function home(): Response
    {
        return $this->render('home/fblogin.html.twig');
    }
    
    #[Route('/privacy-policy', name: 'privacy_policy')]
    public function index(): Response
    {
        return new Response();
    }
}