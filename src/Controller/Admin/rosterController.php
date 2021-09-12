<?php

namespace App\Controller\Admin;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class rosterController extends AbstractController
{
    /**
     * @Route("/admin/roster", name="admin_roster")
     */
    public function index(): Response
    {
        return $this->render('admin/roster/index.html.twig', [
            'controller_name' => 'rosterController',
        ]);
    }
}
