<?php

namespace spec\Openriff\OAuth\ResourceOwner;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class SoundcloudResourceOwnerSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType('Openriff\OAuth\ResourceOwner\SoundcloudResourceOwner');
    }
}
