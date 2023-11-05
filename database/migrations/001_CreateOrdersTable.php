<?php

use Omega\Database\Adapter\AbstractDatabaseAdapter;

class CreateOrdersTable
{
    /**
     * Create table orders.
     *
     * @param  AbstractDatabaseAdapter $connection
     * @return void
     */
    public function migrate( AbstractDatabaseAdapter $connection ) : void
    {
        $table = $connection->createTable( 'orders' );
        $table->id( 'id' );
        $table->int( 'quantity' )->default( 1 );
        $table->float( 'price' )->nullable();
        $table->bool( 'is_confirmed' )->default( false );
        $table->dateTime( 'ordered_at' )->default( 'CURRENT_TIMESTAMP' );
        $table->text( 'notes' );
        $table->execute();
    }
}