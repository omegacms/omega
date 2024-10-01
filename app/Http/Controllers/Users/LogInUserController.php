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
use function password_verify;
use App\Models\User;
use Omega\Support\Facades\Response;
use Omega\Support\Facades\Router;
use Omega\Support\Facades\Session;
use Omega\Support\Facades\Validation;

/**
 * Login user controller.
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
class LogInUserController
{
    /**
     * Handle the controller.
     *
     * @return \Omega\View\View
     * @throws Exception
     */
    public function handle()
    {
        secure();

        $data = Validation::validate($_POST, [
            'email'    => [ 'required', 'email'  ],
            'password' => [ 'required', 'min:10' ],
        ], 'login_errors' );

        $user = User::where( 'email', $data[ 'email' ] )->first();

        if ( $user && password_verify( $data[ 'password' ], $user->password ) ) {
            Session::put( 'user_id', $user->id );
        }

        return Response::redirect( Router::route( 'show-home-page' ) );
    }
}
