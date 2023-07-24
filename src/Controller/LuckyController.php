<?php

namespace App\Controller;

use Exception;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class LuckyController extends AbstractController
{
    /**
     * @throws Exception
     */
    public function number(int $maxInt): Response
    {
        $number = random_int(0, $maxInt);

        return new Response(
            '<html lang="en"><body><p>Lucky number: ' . $number . '</p></body></html>'
        );
    }
}