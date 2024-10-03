<?php
/**
 * Part of Omega CMS - App/Http Package
 *
 * @link       https://omegacms.github.io
 * @author     Adriano Giovannini <omegacms@outlook.com>
 * @copyright  Copyright (c) 2024 Adriano Giovannini. (https://omegacms.github.io)
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
use Exception;
use App\Models\Product;
use Omega\Support\Facade\Facades\Cache;
use Omega\Support\Facade\Facades\Router;
use Omega\Support\Facade\Facades\Session;
use Omega\Support\Facade\Facades\View;

/**
 * Show home page controller class.
 *
 * @category    App
 * @package     App\Http
 * @subpackage  Controllers
 * @link        https://omegacms.github.io
 * @author      Adriano Giovannini <omegacms@outlook.com>
 * @copyright   Copyright (c) 2024 Adriano Giovannini. (https://omegacms.github.io)
 * @license     https://www.gnu.org/licenses/gpl-3.0-standalone.html     GPL V3.0+
 * @version     1.0.0
 */
class ShowHomePageController
{
    /**
     * Handle the controller.
     *
     * @return \Omega\View\View Return an instance of View.
     * @throws Exception
     */
    public function handle() : \Omega\View\View
    {
        $user_id            = Session::get( 'user_id' );
        $products           = Product::all();
        $productsWithRoutes = array_map( function ( $product ) {
            $key = "route-for-product-{$product->id}";

            if ( ! Cache::has( $key ) ) {
                Cache::put( $key, Router::route( 'view-product', [ 'product' => $product->id ] ) );
            }

            $product->route = Cache::get($key);

            return $product;

        }, $products );

        return View::render( 'home', [
            'user_id'  => $user_id,
            'products' => $productsWithRoutes,
        ] );
    }
}
