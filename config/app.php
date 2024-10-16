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
        \Omega\Config\ServiceProvider\ConfigServiceProvider::class,
        \Omega\Cache\ServiceProvider\CacheServiceProvider::class,
        \Omega\Database\ServiceProvider\DatabaseServiceProvider::class,
        //\Omega\Email\ServiceProvider\EmailServiceProvider::class,
        //\Omega\Filesystem\ServiceProvider\FilesystemServiceProvider::class,
        \Omega\Logging\ServiceProvider\LoggingServiceProvider::class,
        \Omega\Queue\ServiceProvider\QueueServiceProvider::class,
        \Omega\Http\ServiceProvider\ResponseServiceProvider::class,
        \Omega\Routing\ServiceProvider\RouterServiceProvider::class,
        \Omega\Session\ServiceProvider\SessionServiceProvider::class,
        \Omega\Validation\ServiceProvider\ValidationServiceProvider::class,
        \Omega\View\ServiceProvider\ViewServiceProvider::class,
    ],

	/**
	 * Array of facades class.
	 */
	'facades'   => [
        'Config'     => \Omega\Support\Facade\Facades\Config::class,
        'Cache'      => \Omega\Support\Facade\Facades\Cache::class,
        'Database'   => \Omega\Support\Facade\Facades\Database::class,
        //'Email'      => \Omega\Support\Facade\Facades\Email::class,
        //'Filesystem' => \Omega\Support\Facade\Facades\Filesystem::class,
        'Logging'    => \Omega\Support\Facade\Facades\Logging::class,
        'Queue'      => \Omega\Support\Facade\Facades\Queue::class,
        'Response'   => \Omega\Support\Facade\Facades\Response::class,
        'Router'     => \Omega\Support\Facade\Facades\Router::class,
        'Session'    => \Omega\Support\Facade\Facades\Session::class,
        'Validator'  => \Omega\Support\Facade\Facades\Validation::class,
        'View'       => \Omega\Support\Facade\Facades\View::class
    ],
];
