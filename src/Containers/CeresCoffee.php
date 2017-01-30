<?php

namespace CeresCoffee\Containers;

use Plenty\Plugin\Templates\Twig;

class CeresCoffee
{
    public function call(Twig $twig):string
    {
        return $twig->render('CeresCoffee::CeresCoffee');
    }
}
