# Acknowledgments and Thanks

First and foremost, I would like to express my gratitude to Christopher Pitt for the splendid second edition of his book on PHP and MVC. Without it, I wouldn't have found the inspiration and motivation to write this framework.

# OmegaCMS Example Application

This is the example application developed using the OmegaCMS framework. For more information about this application, its structure, controllers, models, views, or anything else, you are encouraged to visit the official [OmegaCMS](https://omegacms.github.io) website.

## Requirements

* PHP 8.2 or later

## Installation

To install the package, you can simply run the following from the command line:

```sh
composer create-project omegacms/omega your_project_name
```

or

```sh
git clone https://github.com/omegacms/omega.git
cd omega
composer install
```

## Installing the Database

First, create the database using phpMyAdmin or the command line, then input the database 
details into the config/database.php file. Finally, create the tables with the following 
command:
```php
php omega migrate 
```

or

```php
composer migrate
```

Alternatively, you can use the `--fresh` option. However, note that this option will delete 
existing tables before recreating them.

```php
php omega migrate --fresh
```

or

```
composer dbfresh
```

## Testing

### Running Unit Tests

To run unit tests, use the command:

```php
vendor/bin/phpunit
```

or

```php
composer serve
```

## PHP built-in server. 

Omega has a script that starts the built-in PHP server. However, please note that due 
to the absence of `pcntl` extensions, the verbosity level on Windows operating systems 
is lower than that on Linux and MacOSX.

```php
php omega serve
```

or

```php
composer serve
```

## Contributing

If you'd like to contribute to the OmegaCMS example application package, please follow our [contribution guidelines](CONTRIBUTING.md).

## License

This project is open-source software licensed under the [GNU General Public License v3.0](LICENSE).
