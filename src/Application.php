<?php
/**
 * Created by PhpStorm.
 * User: carlosoliveira
 * Date: 12/11/2018
 * Time: 14:59
 */

declare(strict_types=1);

namespace SONFin;

use SONFin\Plugins\PluginInterface;

class Application
{
    private $serviceContainer;

    /**
    * Application constructor.
    * @param $serviceContainer
    */

    public function __construct(ServiceContainInterface $serviceContainer)
    {
        $this->serviceContainer = $serviceContainer;
    }

    public function service($name)
    {
        return $this->serviceContainer->get($name);
    }

    public function addService(string $name, $service): void
    {
        if(is_callable($service)) {
            $this->serviceContainer->addLazy($name, $service);
        } else {
            $this->serviceContainer->add($name, $service);
        }
    }

public function plugin(PluginInterface $plugin): void {
        $plugin->register($this->serviceContainer);
    }
}