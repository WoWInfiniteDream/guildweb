<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class MythicdungeonController extends AbstractController
{
    /**
     * @Route("/mythicdungeon", name="mythicdungeon")
     */
    public function index(): Response
    {
        return $this->render('mythicdungeon/index.html.twig', [
            'controller_name' => 'MythicdungeonController',
        ]);
    }
}
