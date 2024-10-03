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
namespace App\Http\Controllers\Products;

/**
 * @use
 */
use App\Models\Order;
use App\Models\Product;
use App\Models\User;
use Omega\Support\Facade\Facades\Router;
use Omega\Support\Facade\Facades\Session;
use Omega\Support\Facade\Facades\View;
/**
 * Order summary controller class.
 *
 * @category    App
 * @package     App\Http
 * @subpackage  Controllers\Products
 * @link        https://omegacms.github.io
 * @author      Adriano Giovannini <omegacms@outlook.com>
 * @copyright   Copyright (c) 2024 Adriano Giovannini. (https://omegacms.github.io)
 * @license     https://www.gnu.org/licenses/gpl-3.0-standalone.html     GPL V3.0+
 * @version     1.0.0
 */
class OrderSummaryController
{
    /**
     * Handle the controller.
     *
     * @return \Omega\View\View Return an instance of View.
     */
    public function handle() :\Omega\View\View
    {
        $orderId             = Session::get( 'order_id' );
        $order               = Order::find( (int)$orderId );
        $order->user_name    = User::find( $order->user_id )->name;
        $order->product_name = Product::find( $order->product_id )->name;

        return View::render( 'products/summary', [
             'order'        => $order,
             'deleteAction' => Router::route( 'delete-product' ),
             'buyAction'    => Router::route( 'buy-product' ),
             'csrf'         => csrf()
        ] );
    }
}

