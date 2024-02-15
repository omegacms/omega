<?php

use Omega\Database\Adapter\AbstractDatabaseAdapter;

class CreateJobsTable
{
    /**
     * Alter tables jobs.
     *
     * @param  AbstractDatabaseAdapter $connection
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