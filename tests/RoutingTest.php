<?php

//declare( strict_types = 1 );

namespace Tests;

use Omega\Application\Application;
use Omega\Helpers\Security;
use Omega\Testing\TestCase;
use Omega\Testing\TestResponse;

class RoutingTest extends TestCase
{
    protected Application $application;

    public function setUp(): void
    {
        parent::setUp();

        $this->application = Application::getInstance();
        $this->application->bind('paths.base', fn() => __DIR__ . '/../');
    }

    public function testHomePageIsShown()
    {
        $_SERVER['REQUEST_METHOD'] = 'GET';
        $_SERVER['REQUEST_URI'] = '/';

        $expected = 'Take a trip on a rocket ship';

        $this->assertStringContainsString($expected, $this->application->run()->content());
    }

    public function testRegistrationErrorsAreShown()
    {
        $_SERVER['REQUEST_METHOD'] = 'POST';
        $_SERVER['REQUEST_URI'] = '/register';
        $_SERVER['HTTP_REFERER'] = '/register';

        $_POST['email'] = 'foo';
        $_POST['csrf'] = Security::csrf();

        $response = new TestResponse($this->application->run());

        $this->assertTrue($response->isRedirecting());
        $this->assertEquals($response->redirectingTo(), '/register');

        $response->follow();

        $this->assertStringContainsString('email should be an email', $response->content());
    }
}
