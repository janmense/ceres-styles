<?php

namespace CeresGlamour\Containers;

use Plenty\Plugin\Templates\Twig;

class CeresGlamour
{
    public function call(Twig $twig):string
    {
        return $twig->render('CeresGlamour::CeresGlamour');
    }
}
