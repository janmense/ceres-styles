<?php

namespace CeresElectronic\Providers;

use IO\Helper\TemplateContainer;
use Plenty\Plugin\Events\Dispatcher;
use Plenty\Plugin\ServiceProvider;
use Plenty\Plugin\Templates\Twig;

class CeresElectronicServiceProvider extends ServiceProvider
{

    /**
     * Register the service provider.
     */

    public function register() {}

    public function boot (Twig $twig, Dispatcher $eventDispatcher)
    {
  		$eventDispatcher->listen('tpl.item', function(TemplateContainer $container, $templateData) {
			$container->setTemplate("CeresElectronic::CeresElectronicSingleItem.twig");
		}, -1);
    }
}
