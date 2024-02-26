<?php

//declare( strict_types = 1 );

namespace Tests;

use function Omega\Helpers\app;
use function Omega\Helpers\csrf;
use Omega\Application\Application;
use Omega\Testing\TestCase;
use Omega\Testing\TestResponse;

class RoutingTest extends TestCase
{
    public function testHomePageIsShown()
    {
        $_SERVER['REQUEST_METHOD'] = 'GET';
        $_SERVER['REQUEST_URI'] = '/';

        $expected = 'Take a trip on a rocket ship';

        $this->assertStringContainsString($expected, app()->bootstrap()->content());
    }

    public function testRegistrationErrorsAreShown()
    {
        $_SERVER['REQUEST_METHOD'] = 'POST';
        $_SERVER['REQUEST_URI'] = '/register';
        $_SERVER['HTTP_REFERER'] = '/register';

        $_POST['email'] = 'foo';
        $_POST['csrf'] = csrf();

        $response = new TestResponse(app()->bootstrap());

        $this->assertTrue($response->isRedirecting());
        $this->assertEquals($response->redirectingTo(), '/register');
    }
}
