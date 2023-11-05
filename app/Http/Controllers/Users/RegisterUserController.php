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
use function password_hash;
use App\Models\User;
use Omega\Helpers\Alias;
use Omega\Helpers\Security;
use Omega\Routing\Router;
use Exception;

/**
 * Register user controller.
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
class RegisterUserController
{
    /**
     * Handle the controller.
     *
     * @param  Router $router Holds an instance of Router.
     * @return mixed
     * @throws Exception
     */
    public function handle( Router $router ) : mixed
    {
        Security::secure();

        $data = Security::validate( $_POST, [
            'name'     => [ 'required'           ],
            'email'    => [ 'required', 'email'  ],
            'password' => [ 'required', 'min:10' ],
        ], 'register_errors' );

        $user           = new User();
        $user->name     = $data['name'];
        $user->email    = $data['email'];
        $user->password = password_hash( $data[ 'password' ], PASSWORD_BCRYPT );
        $user->save();

        Alias::session()->put( 'registered', true );

        return Alias::redirect( $router->route( 'show-home-page' ) );
    }
}
