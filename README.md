# Laravel Brevo

[![CircleCI](https://dl.circleci.com/status-badge/img/gh/andrewtweber/laravel-brevo/tree/main.svg?style=shield)](https://dl.circleci.com/status-badge/redirect/gh/andrewtweber/laravel-brevo/tree/main)

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

<sup><sub>Laravel and the Laravel logo are trademarks of Taylor Otwell. Banner image generated with banners.beyondco.de</sub></sup>
