<?php
/**
 * Part of Banco Alimentare Toscana - App\Http Package
 *
 * @link       https://github.com/adrix71/banco-alimentare
 * @author     Adriano Giovannini <dev@agmedia.io>
 * @copyright  Copyright (c) 2022 Banco Alimentare Toscana. (https://www.bancoalimentare.it/it/toscana)
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
    'default'   => 'mysql',
    'mysql'     => [
        'type'     => 'mysql',
        'host'     => '127.0.0.1',
        'port'     => '3306',
        'database' => 'promvc',
        'username' => 'root',
        'password' => 'vb65ty4',
    ],
    'sqlite'    => [
        'type' => 'sqlite',
        'path' => __DIR__ . '/../database/sqlite/database.sqlite',
    ],
];