<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class RecruitmentApplyController extends AbstractController
{
    /**
     * @Route("/recruitment/apply", name="recruitment_apply")
     */
    public function index(): Response
    {
        return $this->render('recruitment_apply/index.html.twig', [
            'controller_name' => 'RecruitmentApplyController',
        ]);
    }
}
