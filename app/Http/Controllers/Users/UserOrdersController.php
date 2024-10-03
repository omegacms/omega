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
namespace App\Http\Controllers\Users;

/**
 * @use
 */
use App\Models\Order;
use App\Models\Product;
use App\Models\User;
use Omega\Support\Facade\Facades\Session;
use Omega\Support\Facade\Facades\View;

/**
 * User order controller.
 *
 * @category    App
 * @package     App\Http
 * @subpackage  Controllers\Users
 * @link        https://omegacms.github.io
 * @author      Adriano Giovannini <omegacms@outlook.com>
 * @copyright   Copyright (c) 2024 Adriano Giovannini. (https://omegacms.github.io)
 * @license     https://www.gnu.org/licenses/gpl-3.0-standalone.html     GPL V3.0+
 * @version     1.0.0
 */
class UserOrdersController
{
    public function handle() : \Omega\View\View
    {
        $user_id = Session::get( 'user_id' );
        $orders  = Order::all($user_id );

        foreach ( $orders as $order ) {
            $order->name         .= User::where( 'id', $user_id)->first()->name;
            $order->product_name .= Product::where( 'id', $order->product_id)->first()->name;
        }

        return View::render( 'users/orders', [
            'orders'  => $orders,
         ] );
    }
}
