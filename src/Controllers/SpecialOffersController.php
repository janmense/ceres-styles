<?php //strict
namespace CeresElectronic\Controllers;

use IO\Helper\TemplateContainer;
use IO\Controllers\LayoutController;

/**
* Class SpecialOffersController
* @package CeresElectronic\Controllers
*/
class SpecialOffersController extends LayoutController
{
	/**
	* Prepare and render the data for the homepage
	* @return string
	*/
	public function showSpecialOffers():string
	{
		return $this->renderTemplate(
		"tpl.special-offers",
		[
			"object" => ""
		]
		);
	}
}