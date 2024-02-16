<?php
/**
 * Omega Application - config/database configuration file.
 *
 * @link       https://omegacms.github.io
 * @author     Adriano Giovannini <omegacms@outlook.com>
 * @copyright  Copyright (c) 2022 Adriano Giovannini. (https://omegacms.github.io)
 * @license    https://www.gnu.org/licenses/gpl-3.0-standalone.html     GPL V3.0+
 */

/**
 * @declare
 */
declare( strict_types = 1 );

/**
 * Return an array of database configuration parameters.
 */
return [
    /**
     * Default Database Connection Name.
     *
     * here you may secify which of the database connection below  you wish
     * to use as your default connection for all database work.  Of course,
     * you may use many connection at once using the Database library.
     */
    'default'   => 'mysql',
    /**
     * Database connection.
     *
     * Here are each of the database connections setup for your application.
     * Of course,  example  of configuring  each database  platform that  is
     * supported by Omega is shown below to make development simple.
     *
     * All database work in Omega  is done through the PH PDO  facilities so
     * make sure you have the driver for your particular  database of coiche
     * installed on your machine before you being development.
     */
    'mysql'     => [
        'type'     => 'mysql',
        'host'     => '127.0.0.1',
        'port'     => '3306',
        'database' => 'promvc',
        'username' => 'root',
        'password' => 'vb65ty4',
    ],
    'sqlite'    => [
        'type'     => 'sqlite',
        'path'     => __DIR__ . '/../database/sqlite/database.sqlite',
    ],
];
