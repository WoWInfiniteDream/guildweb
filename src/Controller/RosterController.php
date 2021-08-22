<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Contracts\HttpClient\HttpClientInterface;

class RosterController extends AbstractController
{

    /**
     * @var client
     */

    private $client;

    public function __construct(HttpClientInterface $client)
    {
        $this->client = $client;
    }

    //Let's start building the roster :)
    //It should roughly show the guild ranks, members in the guild, etc.

    //Roster API link:
    //https://eu.api.blizzard.com/data/wow/guild/%REALM-SLUG%/%GUILD-SLUG%/roster?namespace=profile-eu&locale=en_GB&access_token=%API_CLIENT_ID%

    /**
     * @Route("/roster", name="roster")
     */
    public function index(): Response
    {

        $responseWowGuildRoster = $this->client->request(
            'GET',
            'https://eu.api.blizzard.com/data/wow/guild/argent-dawn/the-templars/roster?namespace=profile-eu&locale=en_GB&access_token=USveBLo2UTC0YiFvE56guxUnWSoFK34wk8'
        );
        //Checking what status code we get back
        $statusCodeWowGuildRoster = $responseWowGuildRoster->getStatusCode();
        if($statusCodeWowGuildRoster == 200)
        {
            $wowGuild_Roster_json = $responseWowGuildRoster->getContent();

            $wowGuildRoster['status'] = true;
            $wowGuildRoster['data'] = json_decode($wowGuild_Roster_json);
        }
        
        return $this->render('roster/index.html.twig', [
            'wowRosterStatus' => $wowGuildRoster['status'],
            'wowRosterData' => $wowGuildRoster['data'],
        ]);
    }
}
