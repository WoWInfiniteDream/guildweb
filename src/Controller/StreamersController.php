<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class StreamersController extends AbstractController
{
    /**
     * @Route("/streamers", name="streamers")
     */
    public function index(): Response
    {
        return $this->render('streamers/index.html.twig', [
            'controller_name' => 'StreamersController',
        ]);
    }
}
