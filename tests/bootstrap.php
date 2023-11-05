<?php

use Omega\Application\Application;

require_once __DIR__ . '/../vendor/autoload.php';

$app = Application::getInstance();
$app->bind('paths.base', fn() => __DIR__ . '/..');
