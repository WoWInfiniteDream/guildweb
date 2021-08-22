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
     * @Route("/progress/raid", name="raid_progress")
     */
    public function index(): Response
    {
        //Need to change this so that it pulls the data from the .env file, cause hardcoding realm, region and guild is dirty
        //Maybe i should just pull the data from the database, that way, the global admin user can change those settings.
        //Also should pull the data for the current raid from the API that way, no typo's can be made.
        $responseWowProgress = $this->client->request(
            'GET',
            'https://raider.io/api/v1/guilds/profile?region=eu&realm=argent-dawn&name=The%20Templars&fields=raid_progression'
        );
        //Checking what status code we get back
        $statusCodeWowProgress = $responseWowProgress->getStatusCode();
        if($statusCodeWowProgress == 200)
        {
            $wowProgress_guild_json = $responseWowProgress->getContent();

            $wowProgressGuild['status'] = true;
            $wowProgressGuild['data'] = json_decode($wowProgress_guild_json);
        }

        $exp_id = '8';

        $responseWowProgressRaidInfo = $this->client->request(
            'GET',
            'https://raider.io/api/v1/raiding/static-data?expansion_id='.$exp_id
        );
        //Checking what status code we get back
        $statusCodeWowProgressRaidInfo = $responseWowProgressRaidInfo->getStatusCode();
        if($statusCodeWowProgressRaidInfo == 200)
        {
            $wowProgress_raid_json = $responseWowProgressRaidInfo->getContent();

            $wowProgressRaid['status'] = true;
            $wowProgressRaid['data'] = json_decode($wowProgress_raid_json);
            $arrayKeyRaid = array_key_last($wowProgressRaid['data']->raids);
            $wowProgressRaid['data'] = $wowProgressRaid['data']->raids[$arrayKeyRaid];
            $currentRaidSlug = $wowProgressRaid['data']->slug;
        }

        $wowCurrentProgressGuild = $wowProgressGuild['data']->raid_progression->$currentRaidSlug;
        //Need to build something so that i don't have to update the raid info every time a new raid comes out

        //Going to pull data from a few API's
        return $this->render('raid_progress/index.html.twig', [
            'wowProgressGuild' => $wowProgressGuild,
            'wowProgressRaid' => $wowProgressRaid,
            'currentProgress' => $wowCurrentProgressGuild,
        ]);
    }
}
