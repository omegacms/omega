<?php
/**
 * Omega Application - config/logging configuration file.
 *
 * @link       https://omegacms.github.io
 * @author     Adriano Giovannini <omegacms@outlook.com>
 * @copyright  Copyright (c) 2024 Adriano Giovannini. (https://omegacms.github.io)
 * @license    https://www.gnu.org/licenses/gpl-3.0-standalone.html     GPL V3.0+
 */

/**
 * @declare
 */
declare( strict_types = 1 );

/**
 * @use
 */
use Monolog\Logger;

/**
 * Return an array of configuration for logger.
 */
return [
    /**
     * Default Log Channel.
     *
     * This options defines the default log channel that gets used when writing
     * messages to the log. The name specified in this option  should match one
     * of the channels defined in the "channels" configuration array.
     */
    'default' => 'stream',
    'stream'  => [
        'type'    => 'stream',
        'path'    => get_storage_path( 'logs/omega.log' ),
        'name'    => 'App',
        'minimum' => Logger::DEBUG,
    ],
];
