# Shortcut API

[![Latest Version on Packagist](https://img.shields.io/packagist/v/ludioao/shortcut-api.svg?style=flat-square)](https://packagist.org/packages/ludioao/shortcut-api)
[![GitHub Tests Action Status](https://img.shields.io/github/workflow/status/ludioao/shortcut-api/run-tests?label=tests)](https://github.com/ludioao/shortcut-api/actions?query=workflow%3Arun-tests+branch%3Amain)
[![GitHub Code Style Action Status](https://img.shields.io/github/workflow/status/ludioao/shortcut-api/Check%20&%20fix%20styling?label=code%20style)](https://github.com/ludioao/shortcut-api/actions?query=workflow%3A"Check+%26+fix+styling"+branch%3Amain)
[![Total Downloads](https://img.shields.io/packagist/dt/ludioao/shortcut-api.svg?style=flat-square)](https://packagist.org/packages/ludioao/shortcut-api)

---
A library for interacting with the Shortcut (formerly Clubhouse) REST API

---


## Installation

You can install the package via composer:

```bash
composer require ludioao/shortcut-api
```

You can publish and run the migrations with:

```bash
php artisan vendor:publish --provider="VendorName\Skeleton\SkeletonServiceProvider" --tag=":package_slug-migrations"
php artisan migrate
```

You can publish the config file with:
```bash
php artisan vendor:publish --provider="LudioAo\Shortcut\ShortcutServiceProvider" --tag=":package_slug-config"
```

This is the contents of the published config file:

```php
return [
];
```

## Usage

```php
$skeleton = new LudioAo\Shortcut();
```

## Testing

```bash
composer test
```

## Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information on what has changed recently.

## Contributing

Please see [CONTRIBUTING](.github/CONTRIBUTING.md) for details.

## Security Vulnerabilities

Please review [our security policy](../../security/policy) on how to report security vulnerabilities.

## Credits

- [Lúdio Oliveira](https://github.com/ludioao)
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
