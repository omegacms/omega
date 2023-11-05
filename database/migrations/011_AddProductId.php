<?php

use Omega\Database\Adapter\AbstractDatabaseAdapter;

class AddProductId
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
        $table->int( 'product_id' );
        $table->execute();
    }
}
