<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class BlogController extends AbstractController
{
//    #[Route('/blog', name: 'app_blog')]
    public function index(Request $request): Response
    {
        // Getting a route name
        var_dump($routeName = $request->attributes->get('_route'));
        echo "<br>";

        // Getting a route parameters
        var_dump($routeParameters = $request->attributes->get('_route_params'));
        echo "<br>";

        $allAttributes = $request->attributes->all();
        foreach ($allAttributes as $allAttribute) {
            echo "<br>";
            var_dump($allAttribute);
            echo "</br>";
        }

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
