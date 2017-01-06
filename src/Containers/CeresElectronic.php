<?php

namespace CeresElectronic\Containers;

use Plenty\Plugin\Templates\Twig;

class CeresElectronic
{
    public function call(Twig $twig):string
    {
        return $twig->render('CeresElectronic::CeresElectronic');
    }
}
