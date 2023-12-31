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
 * @use
 */
use Omega\Config\ServiceProvider\ConfigServiceProvider;
use Omega\Cache\ServiceProvider\CacheServiceProvider;
use Omega\Database\ServiceProvider\DatabaseServiceProvider;
use Omega\Filesystem\ServiceProvider\FilesystemServiceProvider;
use Omega\Queue\ServiceProvider\QueueServiceProvider;
use Omega\Logging\ServiceProvider\LoggingServiceProvider;
use Omega\Http\ServiceProvider\ResponseServiceProvider;
use Omega\Session\ServiceProvider\SessionServiceProvider;
use Omega\Validation\ServiceProvider\ValidationServiceProvider;
use Omega\View\ServiceProvider\ViewServiceProvider;

/**
 * Return an array of service provider.
 */
return [
    ConfigServiceProvider::class,
    SessionServiceProvider::class,
    CacheServiceProvider::class,
    DatabaseServiceProvider::class,
    FilesystemServiceProvider::class,
    QueueServiceProvider::class,
    LoggingServiceProvider::class,
    ResponseServiceProvider::class,
    ValidationServiceProvider::class,
    ViewServiceProvider::class,
];