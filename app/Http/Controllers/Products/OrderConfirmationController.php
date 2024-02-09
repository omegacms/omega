<?php
namespace App\Http\Controllers\Products;

use function Omega\Helpers\session;
use function Omega\Helpers\view;
use App\Models\Order;
use App\Models\Product;
use App\Models\User;
use Omega\Routing\Router;
use Omega\View\View;
use Exception;

class OrderConfirmationController
{
    /**
     * @throws Exception
     */
    public function handle( Router $router ) : View
    {
        $orderId = session()->get( 'order_id' );
        $order   = Order::find((int)$orderId);
        $user    = User::find($order->user_id);
        $order->user_name = User::find($order->user_id)->name;
        $order->product_name = Product::find($order->product_id)->name;
        
        if (!$order) {
            throw new Exception("Order not found");
        }

        //$product = $order->product;

        return view( 'products/confirmation', [
             'order'   => $order,
        ] );
    }
}

