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
 * Return an array of queue configuration parameters.
 */
return [
    'default'  => 'database',
    'database' => [
        'type'     => 'database',
        'table'    => 'jobs',
        'attempts' => 3,
    ],
];