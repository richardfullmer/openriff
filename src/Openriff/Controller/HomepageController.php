<?php

namespace Openriff\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration as Sensio;
 
/**
 * @author Richard Fullmer <richardfullmer@gmail.com>
 */
class HomepageController
{

    /**
     * @Sensio\Route("/", name="homepage")
     * @Sensio\Template
     *
     * @return array
     */
    public function homepageAction()
    {
        return [];
    }
}
