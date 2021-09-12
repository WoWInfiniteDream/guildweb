<?php

namespace App\Controller\Admin;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class settingsController extends AbstractController
{
    /**
     * @Route("/admin/settings", name="admin_settings")
     */
    public function index(): Response
    {
        return $this->render('admin/settings/index.html.twig', [
            'controller_name' => 'settingsController',
        ]);
    }
}
