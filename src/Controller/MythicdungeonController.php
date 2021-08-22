<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class MythicdungeonController extends AbstractController
{
    /**
     * @Route("/progress/dungeon", name="mythicdungeon")
     */

    //This page will pull the current data from wowprogress but have to decide what exactly will be pulled.
    //Ideally, all of the users that want to show there data should be shown here. 
    public function index(): Response
    {

        //https://eu.api.blizzard.com/profile/wow/character/argent-dawn/shoftiel/mythic-keystone-profile?namespace=profile-eu&locale=en_US&access_token=US2aX5g0DjvyJYjZHBHuPYbYWymjqEHNlI

        return $this->render('mythicdungeon/index.html.twig', [
            'controller_name' => 'MythicdungeonController',
        ]);
    }
}
