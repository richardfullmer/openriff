<?php

namespace Openriff\Controller;

use Knp\RadBundle\Controller\Controller as BaseController;

abstract class Controller extends BaseController
{
    /**
     * @return \Pusher
     */
    public function getPusher()
    {
        return $this->container->get('lopi_pusher.pusher');
    }
}
