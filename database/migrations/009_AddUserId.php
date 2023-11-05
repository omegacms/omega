<?php

use Omega\Database\Adapter\AbstractDatabaseAdapter;

class AddUserId
{
    /**
     * Alter tables orders.
     *
     * @param  AbstractDatabaseAdapter $connection
     * @return void
     */
    public function migrate( AbstractDatabaseAdapter $connection ) : void
    {
        $table = $connection->alterTable( 'orders' );
        $table->int( 'user_id' );
        $table->execute();
    }
}