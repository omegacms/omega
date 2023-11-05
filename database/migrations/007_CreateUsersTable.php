<?php

use Omega\Database\Adapter\AbstractDatabaseAdapter;

class CreateUsersTable
{
    /**
     * Create table users.
     *
     * @param  AbstractDatabaseAdapter $connection
     * @return void
     */
    public function migrate( AbstractDatabaseAdapter $connection ) : void
    {
        $table = $connection->createTable( 'users' );
        $table->id( 'id' );
        $table->string( 'name' );
        $table->string( 'email' );
        $table->string( 'password' );
        $table->execute();
    }
}