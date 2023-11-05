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
use Omega\Model\AbstractModel;
use Omega\Database\Relationship;

/**
 * Profile model.
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
     * @return Relationship
     */
    public function user() : Relationship
    {
        return $this->belongsTo( User::class, 'user_id' );
    }
}