<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class AdminBlogController extends AbstractController
{
    /**
     * @Route("/admin/blog", name="admin_blog")
     */
    public function index(): Response
    {
        return $this->render('admin_blog/index.html.twig', [
            'controller_name' => 'AdminBlogController',
        ]);
    }
}
