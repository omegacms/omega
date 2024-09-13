<?php
/**
 * Omega Application - config/cache configuration file.
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
use Omega\Config\ServiceProvider\ConfigServiceProvider;
use Omega\Cache\ServiceProvider\CacheServiceProvider;
use Omega\Database\ServiceProvider\DatabaseServiceProvider;
use Omega\Queue\ServiceProvider\QueueServiceProvider;
use Omega\Http\ServiceProvider\ResponseServiceProvider;
use Omega\Session\ServiceProvider\SessionServiceProvider;
use Omega\Validation\ServiceProvider\ValidationServiceProvider;
use Omega\View\ServiceProvider\ViewServiceProvider;

/**
 * Return an array of service provider.
 */
return [
    ConfigServiceProvider::class,
    CacheServiceProvider::class,
    DatabaseServiceProvider::class,
    QueueServiceProvider::class,
    ResponseServiceProvider::class,
    SessionServiceProvider::class,
    ValidationServiceProvider::class,
    ViewServiceProvider::class,
];
