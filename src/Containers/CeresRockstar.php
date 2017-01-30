<?php

namespace CeresRockstar\Containers;

use Plenty\Plugin\Templates\Twig;

class CeresRockstar
{
    public function call(Twig $twig):string
    {
        return $twig->render('CeresRockstar::CeresRockstar');
    }
}
