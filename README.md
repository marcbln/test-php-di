# PHP-DI Sample Project

This is a sample project demonstrating the use of the [PHP-DI](https://php-di.org/) library for dependency injection in a simple PHP application.

## Installation

1.  Clone the repository.
2.  Install the dependencies using Composer:
    ```bash
    composer install
    ```

## Usage

This project contains two test scripts that demonstrate different ways to use PHP-DI.

### `test1.php`

This script shows how to use the container to automatically resolve dependencies. It creates an instance of `FrontController` and its dependency, `ProductRepository`, without any configuration.

To run the script:

```bash
php test1.php
```

### `test2.php`

This script demonstrates how to use the `ContainerBuilder` to configure the container and bind an interface to a concrete implementation. It binds the `RepositoryInterface` to the `ProductRepository` class.

To run the script:

```bash
php test2.php
```
