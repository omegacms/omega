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
namespace App\Http\Controllers\Errors;

/**
 * @use
 */
use Omega\Support\Facade\Facades\View;

/**
 * Error 500 controller.
 *
 * @category    App
 * @package     App\Http
 * @subpackage  Controllers\Errors
 * @link        https://omegacms.github.io
 * @author      Adriano Giovannini <omegacms@outlook.com>
 * @copyright   Copyright (c) 2024 Adriano Giovannini. (https://omegacms.github.io)
 * @license     https://www.gnu.org/licenses/gpl-3.0-standalone.html     GPL V3.0+
 * @version     1.0.0
 */
class InternalServerErrorController
{
    /**
     * Handle the controller.
     *
     * @return \Omega\View\View
     */
    public function handle() : \Omega\View\View
    {
        return View::render( 'errors/error500' );
    }
}
