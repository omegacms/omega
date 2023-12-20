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
 * @category    App
 * @package     App\Http
 * @subpackage  Models
 * @link        https://github.com/adrix71/banco-alimentare
 * @author      Adriano Giovannini <dev@agmedia.io>
 * @copyright   Copyright (c) 2022 Banco Alimentare Toscana. (https://www.bancoalimentare.it/it/toscana)
 * @license     https://www.gnu.org/licenses/gpl-3.0-standalone.html     GPL V3.0+
 * @version     1.0.0
 */
#[TableName('users')]
class User extends AbstractModel
{
    /**
     * User profile model.
     *
     * @return Relationship
     */
    public function profile() : Relationship
    {
        return $this->hasOne( Profile::class, 'user_id' );
    }

    /**
     * User orders model.
     *
     * @return Relationship
     */
    public function orders() : Relationship
    {
        return $this->hasMany( Order::class, 'user_id' );
    }
}
