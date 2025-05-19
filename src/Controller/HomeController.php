<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Attribute\Route;

class HomeController extends AbstractController
{
    #[Route('/', name: 'app_home')]
    public function index() : \Symfony\Component\HttpFoundation\Response
    {
        return $this->render('home/index.html.twig');
    }
}