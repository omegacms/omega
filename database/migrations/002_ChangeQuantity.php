<?php
/**
 * Omega Application.
 *
 * @link       https://omegacms.github.io
 * @author     Adriano Giovannini <omegacms@outlook.com>
 * @copyright  Copyright (c) 2022 Adriano Giovannini. (https://omegacms.github.io)
 * @license    https://www.gnu.org/licenses/gpl-3.0-standalone.html     GPL V3.0+
 */

/**
 * @declare
 */
declare( strict_types = 1 );

/**
 * @use
 */
use Omega\Database\Adapter\AbstractDatabaseAdapter;

/**
 * Change quantity class.
 * 
 * @category    Application
 * @package     Application\Database
 * @subpackage  Application\Database\Migration
 * @link        https://omegacms.github.io
 * @author      Adriano Giovannini <omegacms@outlook.com>
 * @copyright   Copyright (c) 2022 Adriano Giovannini. (https://omegacms.github.io)
 * @license     https://www.gnu.org/licenses/gpl-3.0-standalone.html     GPL V3.0+
 * @version     1.0.0
 */
class ChangeQuantity
{
    /**
     * Alter tables orders.
     *
     * @param  AbstractDatabaseAdapter $connection Holds the current connection instance.
     * @return void
     */
    public function migrate( AbstractDatabaseAdapter $connection ) : void
    {
        $table = $connection->alterTable( 'orders' );
        $table->int( 'quantity' )->nullable()->alter();
        $table->execute();
    }
}