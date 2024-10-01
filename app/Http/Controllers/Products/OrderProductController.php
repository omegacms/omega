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
use Exception;
use App\Models\Order;
use Omega\Support\Facades\Response;
use Omega\Support\Facades\Router;
use Omega\Support\Facades\Session;

/**
 * Order product controller.
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
class OrderProductController
{
    /**
     * Handler the controller.
     *
     * @return \Omega\View\View
     * @throws Exception
     */
    public function handle()
    {
        secure();

        $data = [
            'user_id'      => Session::get( 'user_id' ),
            'quantity'     => (int) $_POST[ 'quantity' ],
            'product_id'   => (int) $_POST[ 'product_id' ],
            'unit_price'   => (float)$_POST[ 'product_price' ] * (int) $_POST[ 'quantity' ],
        ];

        $order               = new Order();
        $order->user_id      = $data[ 'user_id'  ];
        $order->quantity     = $data[ 'quantity' ];
        $order->product_id   = $data[ 'product_id'  ];
        $order->total_price  = $data[ 'unit_price' ];
        $order->save();

        $orderId = $order->id;

        Session::put( 'order_id', $orderId );
        Session::put( 'ordered', true );

        return Response::redirect( Router::route( 'show-order-summary-page' ) );
    }
}
