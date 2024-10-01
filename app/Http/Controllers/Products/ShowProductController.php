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
use App\Models\Product;
use Omega\Support\Facades\Router;
use Omega\Support\Facades\View;

/**
 * Show product controller.
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
class ShowProductController
{
    /**
     * Handle the controller.
     *
     * @return \Omega\View\View Return an instance of View.
     * @throws Exception
     */
    public function handle() : \Omega\View\View
    {
        $parameters = Router::getCurrent()->getParameters();
        $product    = Product::find( (int) $parameters[ 'product' ] );

        return View::render( 'products/view', [
            'product'     => $product,
            'orderAction' => Router::route('order-product', [
                'product'    => $product->id,
            ] ),
            'csrf'        => csrf(),
        ]);
    }
}
