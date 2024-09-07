<?php
/**
 * Part of Omega CMS - App/Models Package
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
namespace App\Models;

/**
 * @use
 */
use Omega\Database\AbstractModel;
use Omega\Database\Relationship;

/**
 * User model.
 *
 * @package     App\Http
 * @subpackage  Models
 * @link        https://omegacms.github.io
 * @author      Adriano Giovannini <omegacms@outlook.com>
 * @copyright   Copyright (c) 2024 Adriano Giovannini. (https://omegacms.github.io)
 * @license     https://www.gnu.org/licenses/gpl-3.0-standalone.html     GPL V3.0+
 * @version     1.0.0
 */
class User extends AbstractModel
{
    /**
     * Orders table.
     *
     * @var string $table Holds the name for the orders table.
     */
    protected string $table = 'users';

    /**
     * User profile model.
     *
     * @return Relationship Return the current relationship instance.
     */
    public function profile() : Relationship
    {
        return $this->hasOne( Profile::class, 'user_id' );
    }

    /**
     * User orders model.
     *
     * @return Relationship Return the current relationship instance.
     */
    public function orders() : Relationship
    {
        return $this->hasMany( Order::class, 'user_id' );
    }
}
