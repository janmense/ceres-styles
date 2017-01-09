<?php

namespace CeresKids\Containers;

use Plenty\Plugin\Templates\Twig;

class CeresKids
{
    public function call(Twig $twig):string
    {
        return $twig->render('CeresKids::CeresKids');
    }
}
