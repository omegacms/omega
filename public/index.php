<?php

use Omega\Application\Application;

require_once __DIR__ . '/../vendor/autoload.php';

$application = Application::getInstance();
$basePath = dirname(__DIR__);
$application->bind('paths.base', fn() => $basePath);
$application->run()->send();
