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

    public function register() {
         $this->getApplication()->register(CeresElectronicRouteServiceProvider::class);
    }

    public function boot (Twig $twig, Dispatcher $eventDispatcher)
    {
         // provide template to use for single items
        $eventDispatcher->listen('tpl.item', function(TemplateContainer $container,  $templateData) {
            $container->setTemplate("CeresElectronic::Item.SingleItem");
        }, 99);

        // provide template to use for homepage
        $eventDispatcher->listen('tpl.home', function(TemplateContainer $container, $templateData) {
            $container->setTemplate("CeresElectronic::Homepage.Homepage");
        }, 99);

        // provide template to use for item categories
        $eventDispatcher->listen('tpl.category.item', function(TemplateContainer $container, $templateData) {
            $container->setTemplate("CeresElectronic::Category.Item.CategoryItem");
        }, 99);

        // provide template to use for item categories
        $eventDispatcher->listen('tpl.PageNotFound', function(TemplateContainer $container, $templateData) {
            $container->setTemplate("CeresElectronic::PageNotFound");
        }, 99);
    }
}
