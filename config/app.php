<?php
/**
 * Omega Application - config/app file.
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
use Omega\Filesystem\ServiceProvider\FilesystemServiceProvider;
use Omega\Http\ServiceProvider\ResponseServiceProvider;
use Omega\Logging\ServiceProvider\LoggingServiceProvider;
use Omega\Queue\ServiceProvider\QueueServiceProvider;
use Omega\Routing\ServiceProvider\RouterServiceProvider;
use Omega\Session\ServiceProvider\SessionServiceProvider;
use Omega\Validation\ServiceProvider\ValidationServiceProvider;
use Omega\View\ServiceProvider\ViewServiceProvider;
use Omega\Support\Facade\Facades\Cache;
use Omega\Support\Facade\Facades\Config;
use Omega\Support\Facade\Facades\Database;
use Omega\Support\Facade\Facades\Filesystem;
use Omega\Support\Facade\Facades\Logger;
use Omega\Support\Facade\Facades\Queue;
use Omega\Support\Facade\Facades\Response;
use Omega\Support\Facade\Facades\Router;
use Omega\Support\Facade\Facades\Session;
use Omega\Support\Facade\Facades\Validation;
use Omega\Support\Facade\Facades\View;

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
        //\Omega\Email\ServiceProvider\EmailServiceProvider::class,
        FilesystemServiceProvider::class,
        LoggingServiceProvider::class,
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
        //'Email'      => \Omega\Support\Facade\Facades\Email::class,
        'Filesystem' => Filesystem::class,
        'Logger'     => Logger::class,
        'Queue'      => Queue::class,
        'Response'   => Response::class,
        'Router'     => Router::class,
        'Session'    => Session::class,
        'Validator'  => Validation::class,
        'View'       => View::class
    ],
];
