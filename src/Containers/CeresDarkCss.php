<?php

namespace CeresDark\Containers;

use Plenty\Plugin\Templates\Twig;

class CeresDarkCss
{
    public function call(Twig $twig):string
    {
        return $twig->render('CeresDark::CeresDarkCss');
    }
}
