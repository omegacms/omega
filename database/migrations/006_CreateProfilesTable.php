<?php

use Omega\Database\Adapter\AbstractDatabaseAdapter;

class CreateProfilesTable
{
    /**
     * Create table profile.
     *
     * @param  AbstractDatabaseAdapter $connection
     * @return void
     */
    public function migrate( AbstractDatabaseAdapter $connection ) : void
    {
        $table = $connection->createTable( 'profiles' );
        $table->id( 'id' );
        $table->int( 'user_id' );
        $table->execute();
    }
}