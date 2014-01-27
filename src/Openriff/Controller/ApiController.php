<?php

namespace Openriff\Controller;

use FOS\RestBundle\Controller\Annotations as FOS;
use Sensio\Bundle\FrameworkExtraBundle\Configuration as Sensio;
use Openriff\Model\SoundcloudTrack;
use Symfony\Component\HttpFoundation\Response;
use Nelmio\ApiDocBundle\Annotation\ApiDoc;

/**
 * @author Richard Fullmer <richardfullmer@gmail.com>
 */
class ApiController extends Controller
{

    /**
     * @ApiDoc()
     * @FOS\Post("/tracks.{_format}", name="api_track_add", defaults={"_format": "json"}, options={"expose" = true})
     *
     * @Sensio\ParamConverter("track", converter="fos_rest.request_body")
     */
    public function trackAddAction(SoundcloudTrack $track)
    {
        $this->getPusher()->trigger(array('queue'), 'track_added', $track->getId());

        return new Response($track->getId());
    }
}
