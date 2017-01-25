<?php //strict
namespace CeresElectronic\Controllers;

use IO\Helper\TemplateContainer;
use IO\Controllers\LayoutController;

/**
* Class SpecialOffersController
* @package CeresElectronic\Controllers
*/
class PageNotFoundController extends LayoutController
{
	/**
	* Prepare and render the data for the homepage
	* @return string
	*/
	public function showPageNotFound():string
	{
		return $this->renderTemplate(
		"tpl.PageNotFound",
		[
			"object" => ""
		]
		);
	}
}