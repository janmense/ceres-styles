<?php

namespace CeresDark\Containers;

use Plenty\Plugin\Templates\Twig;

class CeresDark
{
    public function call(Twig $twig):string
    {
        return $twig->render('CeresDark::CeresDark');
    }
}
