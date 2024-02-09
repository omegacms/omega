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
use function Omega\Helpers\csrf;
use function Omega\Helpers\view;
use App\Models\Product;
use Omega\Routing\Router;
use Omega\View\View;
use Exception;

/**
 * Show product controller.
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
class ShowProductController
{
    /**
     * Handle the controller.
     *
     * @param  Router $router Holds an instance of Router.
     * @return View
     * @throws Exception
     */
    public function handle( Router $router ) : View
    {
        $parameters = $router->current()->parameters();
        $product    = Product::find( (int) $parameters[ 'product' ] );

        return view('products/view', [
            'product'     => $product,
            'orderAction' => $router->route('order-product', [
                'product'    => $product->id,
            ] ),
            'csrf'        => csrf(),
        ]);
    }
}
