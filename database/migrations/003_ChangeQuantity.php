<?php

use Omega\Database\Adapter\AbstractDatabaseAdapter;

class ChangeQuantity
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
        $table->int( 'quantity' )->nullable()->alter();
        $table->execute();
    }
}