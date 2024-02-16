<?php
/**
 * Part of Banco Alimentare Toscana - App\Models Package
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
namespace App\Models;

/**
 * @use
 */
use Omega\Database\TableName;
use Omega\Database\Model\AbstractModel;
use Omega\Database\Relationship;

/**
 * User model.
 *
 * @package     App\Http
 * @subpackage  Models
 * @link        https://omegacms.github.io
 * @author      Adriano Giovannini <omegacms@outlook.com>
 * @copyright   Copyright (c) 2022 Adriano Giovannini. (https://omegacms.github.io)
 * @license     https://www.gnu.org/licenses/gpl-3.0-standalone.html     GPL V3.0+
 * @version     1.0.0
 */
#[TableName('users')]
class User extends AbstractModel
{
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
