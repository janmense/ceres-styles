<?php

namespace CeresStylePlugin\Containers;

use Plenty\Plugin\Templates\Twig;

class CeresStylePluginContainer
{
    public function call(Twig $twig):string
    {
        return $twig->render('CeresStylePlugin::CeresStylePlugin');
    }
}