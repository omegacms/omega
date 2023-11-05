<?php
/**
 * Part of Banco Alimentare Toscana - App\Http Package
 *
 * @link       https://github.com/adrix71/banco-alimentare
 * @author     Adriano Giovannini <dev@agmedia.io>
 * @copyright  Copyright (c) 2022 Banco Alimentare Toscana. (https://www.bancoalimentare.it/it/toscana)
 * @license    https://www.gnu.org/licenses/gpl-3.0-standalone.html     GPL V3.0+
 */

/**
 * @declare
 */
declare( strict_types = 1 );

/**
 * @namespace
 */
namespace App\Http\Controllers;

/**
 * @use
 */
use function array_map;
use App\Models\Product;
use Omega\Helpers\App;
use Omega\Helpers\Alias;
use Omega\Routing\Router;
use Omega\View\View;
use Exception;

/**
 * Show home page controller.
 *
 * @category    App
 * @package     App\Http
 * @subpackage  Controllers
 * @link        https://github.com/adrix71/banco-alimentare
 * @author      Adriano Giovannini <dev@agmedia.io>
 * @copyright   Copyright (c) 2022 Banco Alimentare Toscana. (https://www.bancoalimentare.it/it/toscana)
 * @license     https://www.gnu.org/licenses/gpl-3.0-standalone.html     GPL V3.0+
 * @version     1.0.0
 */
class ShowHomePageController
{
    /**
     * Handle the controller.
     *
     * @param  Router $router Holds an instance of Router.
     * @return View Return an instance of View.
     * @throws Exception
     */
    public function handle( Router $router) : View
    {
        $cache              = App::application( 'cache' );
        $products           = Product::all();
        $productsWithRoutes = array_map( function ( $product ) use ( $cache, $router ) {
            $key = "route-for-product-{$product->id}";

            if ( ! $cache->has( $key ) ) {
                $cache->put( $key, $router->route( 'view-product', [ 'product' => $product->id ] ) );
            }

            $product->route = $cache->get($key);

            return $product;

        }, $products );

        return Alias::view( 'home', [
            'products' => $productsWithRoutes,
        ] );
    }
}