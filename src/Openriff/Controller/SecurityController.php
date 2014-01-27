<?php

namespace Openriff\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration as Sensio;

/**
 * @author Richard Fullmer <richardfullmer@gmail.com>
 */
class SecurityController extends Controller
{
    /**
     * @Sensio\Route("/logout", name="logout")
     *
     * @throws \RuntimeException
     */
    public function logoutAction()
    {
        throw new \RuntimeException('You must activate the logout in your security firewall configuration.');
    }
}
