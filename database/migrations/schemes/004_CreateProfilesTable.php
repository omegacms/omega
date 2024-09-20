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
 * Create profiles table class.
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
class CreateProfilesTable
{
    public string $table = 'profiles';
    /**
     * Create table profile.
     *
     * @param  AbstractDatabaseAdapter $connection Holds the current connection instance.
     * @return void
     */
    public function up( AbstractDatabaseAdapter $connection ) : void
    {
        $table = $connection->createTable( 'profiles' );
        $table->id( 'id' );
        $table->int( 'user_id' );
        $table->execute();
    }

    /**
     * Rollback the migration (drop the 'profiles' table).
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