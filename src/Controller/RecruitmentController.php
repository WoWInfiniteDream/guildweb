<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class RecruitmentController extends AbstractController
{
    /**
     * @Route("/recruitment", name="recruitment")
     */
    public function index(): Response
    {
        return $this->render('recruitment/index.html.twig', [
            'controller_name' => 'RecruitmentController',
        ]);
    }
}
