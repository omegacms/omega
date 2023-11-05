<?php
namespace App\Http\Controllers\Products;

use App\Models\Order;
use App\Models\Product;
use App\Models\User;
use Omega\Helpers\Alias;
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
        $orderId = Alias::session()->get( 'order_id' );
        $order   = Order::find((int)$orderId);
        $user    = User::find($order->user_id);
        $order->user_name = User::find($order->user_id)->name;
        $order->product_name = Product::find($order->product_id)->name;
        
        if (!$order) {
            throw new Exception("Order not found");
        }

        //$product = $order->product;

        return Alias::view( 'products/confirmation', [
             'order'   => $order,
        ] );
    }
}

