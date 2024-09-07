<?php
/**
 * Omega Application.
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
 * @use
 */
use Omega\Database\Adapter\AbstractDatabaseAdapter;

/**
 * Create orders table class.
 *
 * @category    Application
 * @package     Application\Database
 * @subpackage  Application\Database\Migration
 * @link        https://omegacms.github.io
 * @author      Adriano Giovannini <omegacms@outlook.com>
 * @copyright   Copyright (c) 2024 Adriano Giovannini. (https://omegacms.github.io)
 * @license     https://www.gnu.org/licenses/gpl-3.0-standalone.html     GPL V3.0+
 * @version     1.0.0
 */
class CreateOrdersTable
{
    /**
     * Create table orders.
     *
     * @param  AbstractDatabaseAdapter $connection Holds the current connection instance.
     * @return void
     */
    public function migrate( AbstractDatabaseAdapter $connection ) : void
    {
        $table = $connection->createTable( 'orders' );
        $table->id( 'id' );
        $table->int( 'user_id' );
        $table->int( 'product_id' );
        $table->int( 'quantity' )->nullable();
        $table->int( 'total_price' )->nullable();
        $table->bool( 'is_confirmed' )->default( false );
        $table->dateTime( 'ordered_at' )->default( 'CURRENT_TIMESTAMP' );
		$table->dateTime( 'completed_at' )->nullable();
        $table->text( 'notes' );
        $table->text( 'delivery_instruction' );
        $table->execute();
    }
}
