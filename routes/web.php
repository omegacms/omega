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
use App\Http\Controllers\ShowHomePageController;
use App\Http\Controllers\Products\BuyProductController;
use App\Http\Controllers\Products\DeleteProductController;
use App\Http\Controllers\Products\OrderProductController;
use App\Http\Controllers\Products\OrderSummaryController;
use App\Http\Controllers\Products\ShowProductController;
use App\Http\Controllers\Users\LogInUserController;
use App\Http\Controllers\Users\LogOutUserController;
use App\Http\Controllers\Users\RegisterUserController;
use App\Http\Controllers\Users\ShowRegisterFormController;
use App\Http\Controllers\Users\ShowLoginFormController;
use App\Http\Controllers\Users\UpdateUserDetailsController;
use App\Http\Controllers\Users\ChangeUserPasswordController;
use App\Http\Controllers\Users\UserDashboardController;
use App\Http\Controllers\Users\UserDetailsController;
use App\Http\Controllers\Users\UserOrdersController;
use App\Http\Controllers\Errors\ResponseNotAllowedController;
use App\Http\Controllers\Errors\PageNotFoundController;
use App\Http\Controllers\Errors\InternalServerErrorController;
use Omega\Routing\Router;

/**
 * Return an array of route path.
 */
return function( Router $router ) {
    $router->errorhandler(
        400, [ new ResponseNotAllowedController(), 'handle' ]
    );

    $router->errorhandler(
        404, [ new PageNotFoundController(), 'handle' ]
    );

    $router->errorhandler(
        500, [ new InternalServerErrorController(), 'handle' ]
    );

    $router->get(
        '/',
        [ ShowHomePageController::class, 'handle' ],
    )->name( 'show-home-page' );

    $router->get(
        '/products/view/{product}',
        [ ShowProductController::class, 'handle' ],
    )->name( 'view-product' );

    $router->post(
        '/products/order/{product}',
        [ OrderProductController::class, 'handle' ],
    )->name( 'order-product' );

    $router->get(
        '/products/summary',
        [ new OrderSummaryController(), 'handle' ],
    )->name( 'show-order-summary-page' );

    $router->post(
		'/products/buy-product',
		[ BuyProductController::class, 'handle' ]
    )->name( 'buy-product' );

    $router->post(
		'/products/delete-product',
		[ DeleteProductController::class, 'handle' ]
    )->name( 'delete-product' );

    $router->get(
        '/register',
        [ ShowRegisterFormController::class, 'handle' ],
    )->name( 'show-register-form' );

    $router->get(
        '/user/log-in',
        [ new ShowLoginFormController(), 'handle' ],
    )->name( 'show-login-form' );

    $router->post(
        '/register',
        [ new RegisterUserController(), 'handle' ],
    )->name( 'register-user' );

    $router->post(
        '/user/log-in',
        [ new LogInUserController(), 'handle' ],
    )->name( 'log-in-user' );

    $router->get(
        '/user/log-out',
        [ new LogOutUserController(), 'handle' ],
    )->name( 'log-out-user' );

    $router->get(
        '/user/dashboard',
        [ new UserDashboardController(), 'handle' ],
    )->name( 'show-user-dashboard' );

    $router->get(
        '/user/details',
        [ new UserDetailsController(), 'handle' ]
    )->name( 'user-details' );

    $router->get(
        '/user/orders',
        [ new UserOrdersController(), 'handle' ]
    )->name( 'user-orders' );

    $router->post(
        '/user/details',
        [ new UpdateUserDetailsController(), 'handle' ]
    )->name( 'update-details' );

     $router->post(
        '/user/change',
        [ new ChangeUserPasswordController(), 'handle' ]
    )->name( 'change-password' );
};
