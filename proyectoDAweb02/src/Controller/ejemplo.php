<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ejemplo extends AbstractController
{
   /* #[Route('/ejemplo', name: 'ejemplo')]*/
    public function inicio(): Response
    {
        return new Response("Mensaje: hola gente!!!");
    }
}
