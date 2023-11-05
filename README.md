# Laravel Brevo

[![Latest Version on Packagist](https://img.shields.io/packagist/v/hofmannsven/laravel-brevo.svg?labelColor=232e4a&color=55597b&style=for-the-badge)](https://packagist.org/packages/hofmannsven/laravel-brevo)
[![Build Status](https://img.shields.io/travis/hofmannsven/laravel-brevo/master.svg?labelColor=232e4a&color=55597b&style=for-the-badge)](https://travis-ci.org/hofmannsven/laravel-brevo)
[![GitHub license](https://img.shields.io/github/license/hofmannsven/laravel-brevo.svg?labelColor=232e4a&color=55597b&style=for-the-badge)](https://raw.githubusercontent.com/hofmannsven/laravel-brevo/master/LICENSE.md)

This package is a wrapper for [Brevo's API v3 PHP library](https://github.com/getbrevo/brevo-php).

## Installation

You can install the package via Composer:

```bash
composer require hofmannsven/laravel-brevo
```

### Publish the config files

Publish package config files:

```bash
php artisan vendor:publish --provider="Hofmannsven\Brevo\BrevoServiceProvider"
```

## Testing

```bash
composer test
```

## Changelog

Please read the [changelog](https://github.com/hofmannsven/laravel-brevo/blob/master/CHANGELOG.md) for more information about recent changes.

## Contributing

Please read the [contribution guidelines](https://github.com/hofmannsven/laravel-brevo/blob/master/.github/CONTRIBUTING.md) for details.

## Support

Always feel free to [raise an issue](https://github.com/hofmannsven/laravel-brevo/issues) on GitHub.

## Security

If you discover a security issue, please contact me directly. 
My GPG fingerprint/key is available on [Keybase](https://keybase.io/hofmannsven).

## Credits

- [Sven Hofmann](https://github.com/hofmannsven)
- [All Contributors](https://github.com/hofmannsven/laravel-brevo/graphs/contributors)

## License

MIT License (MIT). Please read the [license](LICENSE.md) for more information.
