<?php

use Omega\Database\Adapter\AbstractDatabaseAdapter;

class AddDeliveryInstructions
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
        $table->text( 'delivery_instructions' );
        $table->execute();
    }
}