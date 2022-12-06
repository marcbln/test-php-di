<?php declare(strict_types=1);

use App\Controller\FrontController;
use DI\Container;

include_once __DIR__ . '/vendor/autoload.php';

$container = new Container();
/** @var FrontController $frontController */
$frontController = $container->get(FrontController::class);
$frontController->someAction();
