<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ProgressController extends AbstractController
{
    //Just using this so that we can send it back to the homepage for now, in a later stage, this will
    //include something so that people have 2 buttons, 1 for raid and 1 for dungeon.
    /**
     * @Route("/progress", name="progress")
     */
    public function index(): Response
    {
        return $this->redirectToRoute('home');
    }
}
