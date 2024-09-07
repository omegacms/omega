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
use App\Models\User;
use Omega\View\View;

/**
 * Update details controller.
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
class UpdateUserDetailsController
{
    /**
     * Handle the controller.
     *
     * @return View Return an instance of View.
     * @throws Exception
     */
    public function handle() : View
    {
        session();
        secure();

        $data = [
            'user_id'  => $_POST[ 'user_id'  ],
            'address'  => $_POST[ 'address'  ],
            'address2' => $_POST[ 'address2' ]
        ];

        $user = User::where( 'id', $data[ 'user_id' ] )->first();

        $user->address  = $data[ 'address'  ];
        $user->address2 = $data[ 'address2' ];
        $user->save();

        return view( 'users/dashboard' );
    }
}
