<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Response;

class AboutController extends AbstractController
{
    #[Route('/about', name :'app_about')]
    public function index(): Response
    {
        return $this->render('pages/about.html.twig');
    }
}