<?php
/**
 * Part of Omega CMS - App/Http Package
 *
 * @link       https://omegacms.github.io
 * @author     Adriano Giovannini <omegacms@outlook.com>
 * @copyright  Copyright (c) 2022 Adriano Giovannini. (https://omegacms.github.io)
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
use function Omega\Helpers\app;
use function Omega\Helpers\session;
use function Omega\Helpers\view;
use Exception;
use App\Models\Product;
use Omega\Routing\Router;
use Omega\View\View;

/**
 * Show home page controller class.
 *
 * @category    App
 * @package     App\Http
 * @subpackage  Controllers
 * @link        https://omegacms.github.io
 * @author      Adriano Giovannini <omegacms@outlook.com>
 * @copyright   Copyright (c) 2022 Adriano Giovannini. (https://omegacms.github.io)
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
    public function handle( Router $router ) : View
    {
        $user_id            = session()->get( 'user_id' );
        $cache              = app( 'cache' );
        $products           = Product::all();
        $productsWithRoutes = array_map( function ( $product ) use ( $cache, $router ) {
            $key = "route-for-product-{$product->id}";

            if ( ! $cache->has( $key ) ) {
                $cache->put( $key, $router->route( 'view-product', [ 'product' => $product->id ] ) );
            }

            $product->route = $cache->get($key);

            return $product;

        }, $products );

        return view( 'home', [
            'user_id'  => $user_id,
            'products' => $productsWithRoutes,
        ] );
    }
}
