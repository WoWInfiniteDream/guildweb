<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class AdminRecruitmentController extends AbstractController
{
    /**
     * @Route("/admin/recruitment", name="admin_recruitment")
     */
    public function index(): Response
    {
        return $this->render('admin_recruitment/index.html.twig', [
            'controller_name' => 'AdminRecruitmentController',
        ]);
    }
}
