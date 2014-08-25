<?php
namespace ZendOAuth2\Client;

use Zend\ServiceManager\FactoryInterface;
use Zend\ServiceManager\ServiceLocatorInterface;

class GoogleFactory implements FactoryInterface
{
    /**
     * Create service
     *
     * @param ServiceLocatorInterface $serviceLocator
     *
     * @return mixed
     */
    public function createService(ServiceLocatorInterface $serviceLocator) {
        $me = new \ZendOAuth2\Client\Google;
        $cf = $serviceLocator->get('Config');
        $me->setOptions(new \ZendOAuth2\ClientOptions($cf['zendoauth2']['google']));
        return $me;
    }
}