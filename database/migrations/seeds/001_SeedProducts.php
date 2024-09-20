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
use Omega\Database\Adapter\AbstractDatabaseAdapter;

/**
 * Seed products class.
 * 
 * @category    Application
 * @package     Application\Database
 * @subpackage  Application\Database\Migration
 * @link        https://omegacms.github.io
 * @author      Adriano Giovannini <omegacms@outlook.com>
 * @copyright   Copyright (c) 2024 Adriano Giovannini. (https://omegacms.github.io)
 * @license     https://www.gnu.org/licenses/gpl-3.0-standalone.html     GPL V3.0+
 * @version     1.0.0
 */
class SeedProducts
{
    public string $table = 'products';

    /**
     * Add products.
     *
     * @param  AbstractDatabaseAdapter $connection Holds the current connection instance.
     * @return void
     */
    public function up( AbstractDatabaseAdapter $connection ) : void
    {
        $products = [
            [
                'name'        => 'Space Tour',
                'description' => 'Take a trip on a rocket ship. Our tours are out of this world. Sign up now for a journey you won&apos;t soon forget.',
                'price'       => 12.50
            ],
            [
                'name'        => 'Large Rocket',
                'description' => 'Need to bring some extra space-baggage? Everyone asking you to bring back a moon rock for them? This is the rocket you want...',
                'price'       => 25.30
            ],
            [
                'name'        => 'Small Rocket',
                'description' => 'Space exploration is expensive. This rocket comes in under budget and atmosphere.',
                'price'       => 50
            ],
        ];

        foreach ( $products as $product ) {
            $connection
                ->query()
                ->from( $this->table )
                ->insert( [ 'name', 'description', 'price' ], $product );
        }
    }
}
