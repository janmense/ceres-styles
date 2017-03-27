<?php

namespace CeresTest\Containers;

use Plenty\Plugin\Templates\Twig;

class CeresTest
{
    public function call(Twig $twig):string
    {
        return $twig->render('CeresTest::CeresTest');
    }
}
