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
namespace App\Http\Controllers\Users;

/**
 * @use
 */
use function Omega\Helpers\csrf;
use function Omega\Helpers\view;
use Omega\Routing\Router;
use Omega\View\View;
use Exception;

/**
 * Show register form controller.
 *
 * @category    App
 * @package     App\Http
 * @subpackage  Controllers\Users
 * @link        https://github.com/adrix71/banco-alimentare
 * @author      Adriano Giovannini <dev@agmedia.io>
 * @copyright   Copyright (c) 2022 Banco Alimentare Toscana. (https://www.bancoalimentare.it/it/toscana)
 * @license     https://www.gnu.org/licenses/gpl-3.0-standalone.html     GPL V3.0+
 * @version     1.0.0
 */
class ShowRegisterFormController
{
    /**
     * Handle the controller.
     *
     * @param  Router $router Holds an instance of Router.
     * @return View Return an instance of View.
     * @throws Exception
     */
    public function handle( Router $router ) : View
    {
        return view( 'users/register', [
            'registerAction' => $router->route( 'register-user' ),
            'logInAction'    => $router->route( 'log-in-user'   ),
            'csrf'           => csrf(),
        ]);
    }
}
