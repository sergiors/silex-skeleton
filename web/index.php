<?php

require_once __DIR__.'/../bootstrap.php';

$env = getenv('APP_ENV') ?: 'dev';
$debug = $env === 'dev';

$app = new \Sergiors\Acme\Silex\Application($debug);

\Symfony\Component\HttpFoundation\Request::enableHttpMethodParameterOverride();

$app->get('/', '\Sergiors\Acme\Apps\Web\Controller\IndexController::indexAction');

$app->run();
