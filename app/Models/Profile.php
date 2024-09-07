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
 * Profile model.
 *
 * @package     App\Http
 * @subpackage  Models
 * @link        https://omegacms.github.io
 * @author      Adriano Giovannini <omegacms@outlook.com>
 * @copyright   Copyright (c) 2024 Adriano Giovannini. (https://omegacms.github.io)
 * @license     https://www.gnu.org/licenses/gpl-3.0-standalone.html     GPL V3.0+
 * @version     1.0.0
 */
class Profile extends AbstractModel
{
    /**
     * Orders table.
     *
     * @var string $table Holds the name for the orders table.
     */
    protected string $table = 'profiles';

    /**
     * User model.
     *
     * @return Relationship Return the current relationship instance.
     */
    public function user() : Relationship 
    {
        return $this->belongsTo( User::class, 'user_id' );
    }
}
