<?php

use ZendOAuth2Test\Bootstrap;

namespace ZendOAuth2Test;

use PHPUnit_Framework_TestCase;

class ModuleConfigTest extends PHPUnit_Framework_TestCase
{
    
    public function testModuleConfig()
    {
        
        $githubClient = Bootstrap::getServiceManager()->get('ZendOAuth2\Github');   
        $facebookClient = Bootstrap::getServiceManager()->get('ZendOAuth2\Facebook');   
        $googleClient = Bootstrap::getServiceManager()->get('ZendOAuth2\Google');   
        $linkedInClient = Bootstrap::getServiceManager()->get('ZendOAuth2\LinkedIn');

        $this->assertSame('github', $githubClient->getProvider());
        $this->assertSame('facebook', $facebookClient->getProvider());
        $this->assertSame('google', $googleClient->getProvider());
        $this->assertSame('linkedin', $linkedInClient->getProvider());

    }
    
}
