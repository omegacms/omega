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
namespace App\Http\Controllers\Products;

/**
 * @use
 */
use function Omega\Helpers\session;
use function Omega\Helpers\view;
use App\Models\Order;
use App\Models\Product;
use App\Models\User;
use Omega\Routing\Router;
use Omega\View\View;

/**
 * Order confirmation controller class.
 *
 * @category    App
 * @package     App\Http
 * @subpackage  Controllers\Products
 * @link        https://omegacms.github.io
 * @author      Adriano Giovannini <omegacms@outlook.com>
 * @copyright   Copyright (c) 2022 Adriano Giovannini. (https://omegacms.github.io)
 * @license     https://www.gnu.org/licenses/gpl-3.0-standalone.html     GPL V3.0+
 * @version     1.0.0
 */
class OrderConfirmationController
{
    /**
     * Handle the controller.
     *
     * @param  Router $router Holds an instance of Router.
     * @return View Return an instance of View.
     */
    public function handle( Router $router ) : View
    {
        $orderId             = session()->get( 'order_id' );
        $order               = Order::find((int)$orderId);
        $user                = User::find($order->user_id);
        $order->user_name    = User::find($order->user_id)->name;
        $order->product_name = Product::find($order->product_id)->name;

        return view( 'products/confirmation', [
             'order'   => $order,
        ] );
    }
}

