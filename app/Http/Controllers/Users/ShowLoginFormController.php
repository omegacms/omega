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
use Omega\Support\Facade\Facades\Router;
use Omega\Support\Facade\Facades\View;

/**
 * Show register form controller.
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
class ShowLoginFormController
{
    /**
     * Handle the controller.
     *
     * @return \Omega\View\View Return an instance of View.
     * @throws Exception
     */
    public function handle() : \Omega\View\View
    {
        return View::render( 'users/login', [
            'logInAction'    => Router::route( 'log-in-user'   ),
            'csrf'           => csrf(),
        ]);
    }
}
