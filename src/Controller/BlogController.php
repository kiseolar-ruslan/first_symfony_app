<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class BlogController extends AbstractController
{
//    #[Route('/blog', name: 'app_blog')]
    public function index(): Response
    {
        return $this->render('blog/index.html.twig', [
            'controller_name' => 'BlogController',
        ]);
    }

//    #[Route('/blog/{slug}', name: 'blog_show', priority: 2)]
    public function show(): Response
    {
        return $this->render('blog/show.html.twig', [
            'controller_name' => 'BlogController',
        ]);
    }
}
