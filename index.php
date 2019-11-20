<?php
date_default_timezone_set('America/Tijuana');
session_start();

require_once __DIR__ . '/vendor/autoload.php';

$container = new DI\Container();

$SessionCheck = $container->get('app\models\session\SessionCheck');

$config = $container->get('app\core\Config');

$app = new app\core\App($container,$SessionCheck,$config);