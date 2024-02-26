<?php
/**
 * Omega Application - config/filesystem configuration file.
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
 * @use
 */
use function Omega\Helpers\env;

/**
 * Return an array of filesystem configuration parameters.
 */
return [
    /**
     * Default Filesystem Disk.
     *
     * Here you may specify the default filesystem disk that shuld be used
     * by the framework. The "Local" disk, as a wel as a  veriety of cloud
     * based disks are available to your applicatio.
     */
    'default' => env( 'FILESYSTEM_DISK', 'local' ),
    
    /**
     * Filesystem Disk.
     *
     * Here you may configure as many filesystem "disks" as you whish, and
     * you may even configure multiple disks  of the sam driver.  Defaults
     * have  been  set up for  each driver as an exampple  of the required
     * values.
     *
     * Supported driver:
     *
     * `local`
     * `s3`
     * `ftp`
     */
    'local'   => [
        'type'     => 'local',
        'path'     => __DIR__ . '/../storage/app',
    ],
    's3'      => [
        'type'     => 's3',
        'key'      => env( 'AWS_ACCESS_KEY_ID' ),
        'secret'   => env( 'AWS_SECRET_ACCESS_KEY' ),
        'token'    => env( 'AWS_TOKEN' ),
        'region'   => env( 'AWS_DEFAULT_REGION' ),
        'bucket'   => env( 'AWS_BUCKET' ),
    ],
    'ftp'     => [
        'type'     => 'ftp',
        'host'     => env( 'FTP_HOST' ),
        'root'     => env( 'FTP_ROOT' ),
        'username' => env( 'FTP_USERNAME' ),
        'password' => env( 'FTP_PASSWORD' ),
    ],
];
