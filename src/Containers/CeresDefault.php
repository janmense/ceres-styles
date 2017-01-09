<?php

namespace CeresDefault\Containers;

use Plenty\Plugin\Templates\Twig;

class CeresDefault
{
    public function call(Twig $twig):string
    {
        return $twig->render('CeresDefault::CeresDefault');
    }
}
