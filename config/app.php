<?php
/**
 * Omega Application - config/nfiguration file.
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
use Omega\Routing\ServiceProvider\RouterServiceProvider;
use Omega\Session\ServiceProvider\SessionServiceProvider;
use Omega\Validation\ServiceProvider\ValidationServiceProvider;
use Omega\View\ServiceProvider\ViewServiceProvider;
use Omega\Support\Facades\Config;
use Omega\Support\Facades\Cache;
use Omega\Support\Facades\Database;
use Omega\Support\Facades\Email;
use Omega\Support\Facades\Filesystem;
use Omega\Support\Facades\Logging;
use Omega\Support\Facades\Queue;
use Omega\Support\Facades\Response;
use Omega\Support\Facades\Router;
use Omega\Support\Facades\Session;
use Omega\Support\Facades\Validation;
use Omega\Support\Facades\View;

/**
 * Return an array with common application parameters.
 */
return [
	/**
	 * Application Timezone.
	 *
	 * Specifies the default timezone for the application. This determines
	 * how date and time values are formatted and displayed based on the
	 * geographical location of the application.
	 */
	'timezone' => 'Europe/Rome',

	/**
	 * Array of ServiceProviders.
	 */
	'providers' => [
        ConfigServiceProvider::class,
        CacheServiceProvider::class,
        DatabaseServiceProvider::class,
        //EmailServiceProvider::class,
        //FilesystemServiceProvider::class,
        //LoggingServiceProvider::class,
        QueueServiceProvider::class,
        ResponseServiceProvider::class,
        RouterServiceProvider::class,
        SessionServiceProvider::class,
        ValidationServiceProvider::class,
        ViewServiceProvider::class,
    ],

	/**
	 * Array of facades class.
	 */
	'facades'   => [
        'Config'     => Config::class,
        'Cache'      => Cache::class,
        'Database'   => Database::class,
        //'Email'      => Email::class,
        //'Filesystem' => Filesystem::class,
        //'Logging'    => Logging::class,
        'Queue'      => Queue::class,
        'Response'   => Response::class,
        'Router'     => Router::class,
        'Session'    => Session::class,
        'Validation' => Validation::class,
        'View'       => View::class
    ],
];