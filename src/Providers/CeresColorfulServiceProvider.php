<?php

namespace CeresColorful\Providers;

use IO\Helper\TemplateContainer;
use Plenty\Plugin\Events\Dispatcher;
use Plenty\Plugin\ServiceProvider;
use Plenty\Plugin\Templates\Twig;

class CeresColorfulServiceProvider extends ServiceProvider
{

    /**
     * Register the service provider.
     */

    public function register() {
         
    }

    public function boot (Twig $twig, Dispatcher $eventDispatcher)
    {

        // provide template to use for homepage
        $eventDispatcher->listen('tpl.home', function(TemplateContainer $container, $templateData) {
            $container->setTemplate("CeresColorful::Homepage.Homepage");
        }, 99);
    }
}