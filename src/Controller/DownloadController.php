<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\BinaryFileResponse;
use Symfony\Component\HttpFoundation\File\File;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\ResponseHeaderBag;

class DownloadController extends AbstractController
{
    public function __invoke(): BinaryFileResponse
    {
        $filePath = '/Applications/MAMP/htdocs/symfony-app/first_symfony_project/output_files/структура папок symfony.png';
        $fileObject = new File($filePath);

        //send the contents of the file and make the browser download it
        //return $this->file($fileObject);

        //display the file content in the browser instead of downloading
        return $this->file($fileObject, 'custom_name.png', ResponseHeaderBag::DISPOSITION_INLINE);
    }
}