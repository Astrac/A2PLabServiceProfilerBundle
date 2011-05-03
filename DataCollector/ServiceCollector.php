<?php

namespace A2PLab\ServiceProfilerBundle\DataCollector;

use Symfony\Component\HttpKernel\DataCollector\DataCollector;
use Symfony\Component\DependencyInjection\Container;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class ServiceCollector extends DataCollector {

    protected $container;
    
    public function __construct(Container $container) {
        $this->container = $container;
    }
    
    public function collect(Request $request, Response $response, \Exception $exception = null) {
        $this->data = array(
            'services' => $this->container->getServiceIds()
        );
    }
    
    public function getName() {
        return 'service';
    }
    
    public function getServices() {
        return $this->data['services'];
    }
}
