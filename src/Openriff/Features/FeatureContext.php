<?php

namespace Openriff\Features;

use Behat\MinkExtension\Context\MinkContext;
use Behat\Symfony2Extension\Context\KernelDictionary;
use Sanpi\Behatch\Context\BehatchContext;

/**
 * Class FeatureContext
 */
class FeatureContext extends MinkContext
{
    use KernelDictionary;

    public function __construct(array $parameters)
    {
        $this->useContext('behatch', new BehatchContext($parameters));
    }

    /**
     * Add an header element in a request
     *
     * sanpi/behatch-contexts version of this sentence doesn't work with the symfony2 driver
     *
     * @Then /^I add the "(?P<name>[^"]*)" header equal to "(?P<value>[^"]*)"$/
     */
    public function iReallyAddHeaderEqualTo($name, $value)
    {
        $name = strtoupper(str_replace('-', '_', $name));
        $this->getSession()->getDriver()->getClient()->setServerParameter($name, $value);
    }
}
