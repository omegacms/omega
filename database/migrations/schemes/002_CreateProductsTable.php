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
 * Create products table class.
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
class CreateProductsTable
{
    public string $table = 'products';
    /**
     * Alter tables products.
     *
     * @param  AbstractDatabaseAdapter $connection Holds the current connection instance.
     * @return void
     */
    public function up( AbstractDatabaseAdapter $connection ) : void
    {
        $table = $connection->createTable( 'products' );
        $table->id( 'id' );
        $table->string( 'name' );
        $table->text( 'description' );
        $table->int( 'price' )->nullable();
        $table->execute();
    }

    /**
     * Rollback the migration (drop the 'products' table).
     *
     * @param  AbstractDatabaseAdapter $connection Holds the current connection instance.
     * @return void
     */
    public function down(AbstractDatabaseAdapter $connection): void
    {
        $query = "DROP TABLE IF EXISTS `{$this->table}`";
        $connection->pdo()->prepare($query)->execute();
    }
}
