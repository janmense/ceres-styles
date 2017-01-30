<?php

namespace CeresFood\Containers;

use Plenty\Plugin\Templates\Twig;

class CeresFood
{
    public function call(Twig $twig):string
    {
        return $twig->render('CeresFood::CeresFood');
    }
}
