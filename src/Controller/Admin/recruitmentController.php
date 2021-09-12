<?php

namespace App\Controller\Admin;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class recruitmentController extends AbstractController
{
    /**
     * @Route("/admin/recruitment", name="admin_recruitment")
     */
    public function index(): Response
    {
        return $this->render('admin/recruitment/index.html.twig', [
            'controller_name' => 'recruitmentController',
        ]);
    }
}
