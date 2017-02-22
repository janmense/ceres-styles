<?php
 
namespace CeresRockstar\Containers;
 
use Plenty\Plugin\Templates\Twig;
 
class CeresRockstarContainer
{
    public function call(Twig $twig):string
    {
        return $twig->render('CeresRockstar::CeresRockstar');
    }
}