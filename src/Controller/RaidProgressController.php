<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Contracts\HttpClient\HttpClientInterface;

class RaidProgressController extends AbstractController
{
    /**
     * @var client
     */

    private $client;

    public function __construct(HttpClientInterface $client)
    {
        $this->client = $client;
    }

    /**
     * @Route("/raid/progress", name="raid_progress")
     */
    public function index(): Response
    {
        //Need to change this so that it pulls the data from the .env file, cause hardcoding realm, region and guild is dirty
        $responseWowProgress = $this->client->request(
            'GET',
            'https://raider.io/api/v1/guilds/profile?region=eu&realm=argent-dawn&name=Infinite%20Dream&fields=raid_progression'
        );
        //Checking what status code we get back
        $statusCodeWowProgress = $responseWowProgress->getStatusCode();
        if($statusCodeWowProgress == 200)
        {
            $wowProgress_guild_json = $responseWowProgress->getContent();

            $wowProgressGuild['status'] = true;
            $wowProgressGuild['data'] = json_decode($wowProgress_guild_json);
        }

        //Need to build something so that i don't have to update the raid info every time a new raid comes out

        //Going to pull data from a few API's
        return $this->render('raid_progress/index.html.twig', [
            'wowProgressGuild' => $wowProgressGuild,
        ]);
    }
}
