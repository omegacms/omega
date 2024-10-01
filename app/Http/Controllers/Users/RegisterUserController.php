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
namespace App\Http\Controllers\Users;

/**
 * @use
 */
use Exception;
use function password_hash;
use App\Models\User;
use Omega\Support\Facades\Session;
use Omega\Support\Facades\Response;
use Omega\Support\Facades\Router;
use Omega\Support\Facades\Validation;

/**
 * Register user controller.
 *
 * @category    App
 * @package     App\Http
 * @subpackage  Controllers\Users
 * @link        https://omegacms.github.io
 * @author      Adriano Giovannini <omegacms@outlook.com>
 * @copyright   Copyright (c) 2024 Adriano Giovannini. (https://omegacms.github.io)
 * @license     https://www.gnu.org/licenses/gpl-3.0-standalone.html     GPL V3.0+
 * @version     1.0.0
 */
class RegisterUserController
{
    /**
     * Handle the controller.
     *
     * @return \Omega\View\View
     * @throws Exception
     */
    public function handle() : \Omega\View\View
    {
        secure();

        $data = Validation::validate($_POST, [
            'name'     => ['required'],
            'email'    => ['required', 'email'],
            'password' => ['required', 'min:10'],
        ], 'register_errors');

        $user           = new User();
        $user->name     = $data['name'];
        $user->email    = $data['email'];
        $user->password = password_hash( $data[ 'password' ], PASSWORD_BCRYPT );
        $user->save();

        Session::put( 'registered', true );

        return Response::redirect( Router::route( 'show-home-page' ) );
    }
}
