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
use App\Models\User;
use Omega\Support\Facade\Facades\Router;
use Omega\Support\Facade\Facades\Session;
use Omega\Support\Facade\Facades\View;

/**
 * User details controller.
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
class UserDetailsController
{
    public function handle() : \Omega\View\View
    {
        $user_id = Session::get( 'user_id' );
        $user    = User::where( 'id', $user_id )->first();

        return View::render( 'users/details', [ 
            'user'                 => $user,
            'updateDetailsAction'  => Router::route( 'update-details' ),
            'changePasswordAction' => Router::route( 'change-password' ),
            'csrf'                 => csrf()
        ] );
    }
}
