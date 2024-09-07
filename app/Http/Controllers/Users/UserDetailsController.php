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
use Omega\Routing\Router;
use Omega\View\View;
use App\Models\User;

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
    public function handle( Router $router ) : View
    {
        $user_id = session()->get( 'user_id' );
        $user    = User::where( 'id', $user_id )->first();

        return view( 'users/details', [ 
            'user'                 => $user,
            'updateDetailsAction'  => $router->route( 'update-details' ),
            'changePasswordAction' => $router->route( 'change-password' ),
            'csrf'                 => csrf()
        ] );
    }
}
