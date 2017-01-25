<?php //strict
namespace CeresElectronic\Providers;
use Plenty\Plugin\RouteServiceProvider;
use Plenty\Plugin\Routing\Router;
/**
* Class CeresElectronicRouteServiceProvider
* @package CeresElectronic\Providers
*/
class CeresElectronicRouteServiceProvider extends RouteServiceProvider
{
	public function register() {}
	/**
	* @param Router $router
	*/
	public function map(Router $router)
	{
		$router->get('PageNotFound', 'CeresElectronic\Controllers\PageNotFoundController@showPageNotFound');
	}
}