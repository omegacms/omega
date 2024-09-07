<?php
/**
 * Omega Application.
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
use Omega\Application\Application;

/**
 * Create the main application object.
 *
 * The first thing  we will  do is create  a new Omega application
 * instance which  serves at the "glue" for  all the components of
 * Omega,  and  is   the IoC container  for the system binding all
 * * the various parts.
 */
$application = Application::getInstance(
    $_ENV[ 'APP_BASE_PATH' ] ?? dirname( __DIR__ )
);

/**
 * Return the application.
 *
 * This script returns the application   instance. The instance is
 * given to the calling script, so we can separate the building of
 * the  instances from  the actual running  of the application and
 * sending response.
 */
return $application;
