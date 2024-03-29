<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ApplyController extends AbstractController
{
    /**
     * @Route("/apply", name="apply")
     */
    public function index(): Response
    {
        return $this->render('apply/index.html.twig', [
            'controller_name' => 'ApplyController',
        ]);
    }
}
