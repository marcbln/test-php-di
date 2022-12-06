<?php declare(strict_types=1);

use App\Controller\FrontController;
use App\Controller\SomeOtherController;
use App\Repository\ProductRepository;
use App\Repository\RepositoryInterface;
use DI\ContainerBuilder;
use function Di\create;

include_once __DIR__ . '/vendor/autoload.php';

// ---- build container with ContainerBuilder - setting concrete classes for interfaces
$containerBuilder = new ContainerBuilder();
$containerBuilder->addDefinitions([
    RepositoryInterface::class => create(ProductRepository::class)
]);
$container = $containerBuilder->build();


/** @var FrontController $frontController */
$frontController = $container->get(SomeOtherController::class);
$frontController->someAction();
