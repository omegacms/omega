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
 * Create jobs table class.
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
class CreateJobsTable
{
    /**
     * Alter tables jobs.
     *
     * @param  AbstractDatabaseAdapter $connection Holds the current connection instance.
     * @return void
     */
    public function migrate( AbstractDatabaseAdapter $connection ) : void
    {
        $table = $connection->createTable( 'jobs' );
        $table->id( 'id' );
        $table->text( 'closure' );
        $table->text( 'params' );
        $table->int( 'attempts' )->default( 0 );
        $table->bool( 'is_complete' )->default( false );
        $table->execute();
    }
}