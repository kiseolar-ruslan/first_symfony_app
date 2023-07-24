<?php

namespace App\Controller;

use App\Service\RandomMessageGenerator;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class RandomMessageController extends AbstractController
{
    public function __invoke(RandomMessageGenerator $messageGenerator): Response
    {
        $message = $messageGenerator->getHappyMessage();
        $this->addFlash('Succes', $message);

        return new Response(
            '<html lang="en"><body><p>Random Message: ' . $message . '</p></body></html>'
        );
    }
}
