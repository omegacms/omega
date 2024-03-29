<?php
/**
 * Omega Application - config/cache configuration file.
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
use App\Http\Controllers\ShowHomePageController;
use App\Http\Controllers\Products\OrderProductController;
use App\Http\Controllers\Products\OrderConfirmationController;
use App\Http\Controllers\Products\ShowProductController;
use App\Http\Controllers\Users\LogInUserController;
use App\Http\Controllers\Users\LogOutUserController;
use App\Http\Controllers\Users\RegisterUserController;
use App\Http\Controllers\Users\ShowRegisterFormController;
use Omega\Routing\Router;

/**
 * Return an array of route path.
 */
return function( Router $router ) {
    $router->errorHandler(
        404, fn() => 'whoops!'
    );

    $router->addRoute(
        'GET', '/',
        [new ShowHomePageController(), 'handle'],
    )->name('show-home-page');

    $router->addRoute(
        'GET', '/products/view/{product}',
        [new ShowProductController(), 'handle'],
    )->name('view-product');

    $router->addRoute(
        'POST', '/products/order/{product}',
        [new OrderProductController(), 'handle'],
    )->name('order-product');

    $router->addRoute(
        'GET', '/products/confirmation',
        [new OrderConfirmationController(), 'handle'],
    )->name('show-order-confirmation-page');

    $router->addRoute(
        'GET', '/register',
        [new ShowRegisterFormController(), 'handle'],
    )->name('show-register-form');

    $router->addRoute(
        'POST', '/register',
        [new RegisterUserController(), 'handle'],
    )->name('register-user');

    $router->addRoute(
        'POST', '/log-in',
        [new LogInUserController(), 'handle'],
    )->name('log-in-user');

    $router->addRoute(
        'GET', '/log-out',
        [new LogOutUserController(), 'handle'],
    )->name('log-out-user');
};
