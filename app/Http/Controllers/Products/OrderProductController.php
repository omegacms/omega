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
namespace App\Http\Controllers\Products;

/**
 * @use
 */
use App\Models\Order;
use Omega\Helpers\Alias;
use Omega\Helpers\Security;
use Omega\Routing\Router;
use Exception;

/**
 * Order product controller.
 *
 * @category    App
 * @package     App\Http
 * @subpackage  Controllers\Products
 * @link        https://github.com/adrix71/banco-alimentare
 * @author      Adriano Giovannini <dev@agmedia.io>
 * @copyright   Copyright (c) 2022 Banco Alimentare Toscana. (https://www.bancoalimentare.it/it/toscana)
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
     * @throws Exception
     */
    public function handle( Router $router ) : mixed
    {
        Security::secure();

        $data = [
            'user_id'    => Alias::session( 'user_id' ),
            'quantity'   => (int) $_POST[ 'quantity' ],
            'product_id' => (int) $_POST[ 'product_id' ]
        ];

        $order           = new Order();
        $order->user_id  = $data[ 'user_id'  ];
        $order->quantity = $data[ 'quantity' ];
        $order->product_id = $data[ 'product_id'  ];
        $order->save();

        $orderId = $order->id;

        Alias::session()->put( 'order_id', $orderId );
        Alias::session()->put( 'ordered', true );

        return Alias::redirect( $router->route( 'show-order-confirmation-page' ) );
    }
}