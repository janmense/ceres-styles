<?php

namespace CeresColorful\Containers;

use Plenty\Plugin\Templates\Twig;

class CeresColorful
{
    public function call(Twig $twig):string
    {
        return $twig->render('CeresColorful::CeresColorful');
    }
}
