<?php

use Omega\Database\Adapter\AbstractDatabaseAdapter;

class DropPrice
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
        $table->dropColumn( 'price' );
        $table->execute();
    }
}