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
use function Omega\Helpers\redirect;
use function Omega\Helpers\secure;
use function Omega\Helpers\session;
use App\Models\Order;
use Omega\Routing\Router;

/**
 * Order product controller.
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
class OrderProductController
{
    /**
     * Handler the controller.
     *
     * @param  Router $router Holds an instance of Router.
     * @return mixed
     */
    public function handle( Router $router ) : mixed
    {
        secure();

        $data = [
            'user_id'    => session( 'user_id' ),
            'quantity'   => (int) $_POST[ 'quantity' ],
            'product_id' => (int) $_POST[ 'product_id' ]
        ];

        $order           = new Order();
        $order->user_id  = $data[ 'user_id'  ];
        $order->quantity = $data[ 'quantity' ];
        $order->product_id = $data[ 'product_id'  ];
        $order->save();

        $orderId = $order->id;

        session()->put( 'order_id', $orderId );
        session()->put( 'ordered', true );

        return redirect( $router->route( 'show-order-confirmation-page' ) );
    }
}
