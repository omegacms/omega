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
use Omega\Support\Facades\View;

/**
 * Buy product controller class.
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
class BuyProductController
{
	/**
     * Handle the controller.
     *
     * @return \Omega\View\View Return an instance of View.
     * @throws Exception
     */
	public function handle() : \Omega\View\View
	{
		session();
		secure();

		$order_id = $_POST[ 'order_id' ];
		$order    = Order::where( 'id', $order_id )->first();

		$data = [
		    'is_confirmed'         => true,
		    'completed_at'         => now(),
			'notes'                => $_POST[ 'notes' ] ?? null,
			'delivery_instruction' => $_POST[ 'delivery_instruction' ] ?? null
		];

		$order->is_confirmed         = $data[ 'is_confirmed' ];
		$order->completed_at         = $data[ 'completed_at' ];
		$order->notes                = $data[ 'notes' ];
		$order->delivery_instruction = $data[ 'delivery_instruction' ];
		
		$order->save();

		return View::render( 'products/buy-product', [
			'order' => $order
		] );
	}
}
