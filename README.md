
# This is my package lighthouse-spatie-permissions

[![Latest Version on Packagist](https://img.shields.io/packagist/v/cboxdk/lighthouse-spatie-permissions.svg?style=flat-square)](https://packagist.org/packages/cboxdk/lighthouse-spatie-permissions)
[![GitHub Tests Action Status](https://img.shields.io/github/workflow/status/cboxdk/lighthouse-spatie-permissions/run-tests?label=tests)](https://github.com/cboxdk/lighthouse-spatie-permissions/actions?query=workflow%3Arun-tests+branch%3Amain)
[![GitHub Code Style Action Status](https://img.shields.io/github/workflow/status/cboxdk/lighthouse-spatie-permissions/Check%20&%20fix%20styling?label=code%20style)](https://github.com/cboxdk/lighthouse-spatie-permissions/actions?query=workflow%3A"Check+%26+fix+styling"+branch%3Amain)
[![Total Downloads](https://img.shields.io/packagist/dt/cboxdk/lighthouse-spatie-permissions.svg?style=flat-square)](https://packagist.org/packages/cboxdk/lighthouse-spatie-permissions)

This package is created for internal use with heavy inspiration from mlab817/lighthouse-graphql-permission.

## Installation

You can install the package via composer:

```bash
composer require cboxdk/lighthouse-spatie-permissions
```

You can publish the config file with:

```bash
php artisan vendor:publish --tag="lighthouse-spatie-permissions-config"
```

This is the contents of the published config file:

```php
return [
    /*
     * Define where the schema will be stored
     */
    'schema' => null,
    /*
     * Determine the guard to use as default guard_name when creating roles and permissions
     * Defaults to api
     */
    'guard' => env('LIGHTHOUSE_PERMISSION_GUARD', 'api'),
    /*
     * Restrict mutations to specific role
     */
    'restrict' => [
        'role' => env('LIGHTHOUSE_PERMISSION_RESTRICT_MUTATIONS','admin')
    ],

    'users' => [
        'table' => env('LIGHTHOUSE_PERMISSION_USERS_TABLE', 'users'),
    ],
];
```

Optionally, you can publish the views using

```bash
php artisan vendor:publish --tag="lighthouse-spatie-permissions-views"
```

## Usage

The graphql schema is added to lighthouse. You may change it or use as is.

## Testing

```bash
composer test
```

## Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information on what has changed recently.

## Contributing

Please see [CONTRIBUTING](https://github.com/cboxdk/.github/blob/main/CONTRIBUTING.md) for details.

## Security Vulnerabilities

Please review [our security policy](../../security/policy) on how to report security vulnerabilities.

## Credits

- [Sylvester Nielsen](https://github.com/sylvesternielsen)
- mlab817/lighthouse-graphql-permission

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
