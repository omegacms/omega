<?php

use Omega\Database\Adapter\AbstractDatabaseAdapter;

class CreateProductsTable
{
    /**
     * Alter tables products.
     *
     * @param  AbstractDatabaseAdapter $connection
     * @return void
     */
    public function migrate( AbstractDatabaseAdapter $connection ) : void
    {
        $table = $connection->createTable( 'products' );
        $table->id( 'id' );
        $table->string( 'name' );
        $table->text( 'description' );
        $table->execute();
    }
}