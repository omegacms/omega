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
 * Create users table class.
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
class CreateUsersTable
{
    /**
     * Create table users.
     *
     * @param  AbstractDatabaseAdapter $connection Holds the current connection instance.
     * @return void
     */
    public function migrate( AbstractDatabaseAdapter $connection ) : void
    {
        $table = $connection->createTable( 'users' );
        $table->id( 'id' );
        $table->string( 'name' );
        $table->string( 'email' );
        $table->string( 'password' );
        $table->string( 'address' )->default('');
        $table->string( 'address2' )->default('');;
        $table->execute();
    }
}
