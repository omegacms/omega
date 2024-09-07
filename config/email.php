<?php
/**
 * Omega Application - config/email configuration file.
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
 * Return an array of cache configuration parameters.
 */
return [
    /**
     * Default Mailer
     *
     * This option controls the default mailer  that is used to send  any mail
     * message sent by your application. Alternative mailers  may be setup and
     * used as need: however, this mailer will be used by default.
     */
    'default'  => 'postmark',

    /**
     * Mailer Configuration
     *
     * Here you mai configure all the mailers used by your application plus
     * their respective settings.
     *
     * Supported ("for now")
     *
     * + `postmark`
     */
    'postmark' => [
        'type'     => 'postmark',
        'token'    => env('EMAIL_TOKEN'),
        'from'     => [
            'name'  => env( 'EMAIL_FROM_NAME', 'pippo' ),
            'email' => env( 'EMAIL_FROM_EMAIL', 'pippo@hotmail.com' ),
        ],

    ]
];
