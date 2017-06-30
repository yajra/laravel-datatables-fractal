# Laravel DataTables Fractal Plugin

[![Laravel 5.4|5.5](https://img.shields.io/badge/Laravel-5.4|5.5-orange.svg)](http://laravel.com)
[![Latest Stable Version](https://img.shields.io/packagist/v/yajra/laravel-datatables-fractal.svg)](https://packagist.org/packages/yajra/laravel-datatables-fractal)
[![Build Status](https://travis-ci.org/yajra/laravel-datatables-fractal.svg?branch=master)](https://travis-ci.org/yajra/laravel-datatables-fractal)
[![Scrutinizer Code Quality](https://scrutinizer-ci.com/g/yajra/laravel-datatables-fractal/badges/quality-score.png?b=master)](https://scrutinizer-ci.com/g/yajra/laravel-datatables-fractal/?branch=master)
[![Total Downloads](https://img.shields.io/packagist/dt/yajra/laravel-datatables-fractal.svg)](https://packagist.org/packages/yajra/laravel-datatables-fractal)
[![License](https://img.shields.io/github/license/mashape/apistatus.svg)](https://packagist.org/packages/yajra/laravel-datatables-fractal)

This package is a plugin of [Laravel Datatables](https://github.com/yajra/laravel-datatables) for transforming server-side response using [Fractal](https://github.com/thephpleague/fractal).

## Requirements
- [PHP >=7.0](http://php.net/)
- [Laravel 5.4|5.5](https://github.com/laravel/framework)
- [Laravel DataTables v8.x](https://github.com/yajra/laravel-datatables)

## Documentations
- [Laravel Datatables Fractal Documentation](https://yajrabox.com/docs/laravel-datatables/master/response-fractal)

## Quick Installation
`composer require yajra/laravel-datatables-fractal:^1.0`

#### Register Service Provider (Optional on Laravel 5.5)
`Yajra\Datatables\FractalServiceProvider::class`

#### Configuration and Assets (Optional)
`$ php artisan vendor:publish --tag=datatables-fractal --force`

And that's it! Start building out some awesome DataTables!

## Contributing

Please see [CONTRIBUTING](https://github.com/yajra/laravel-datatables-fractal/blob/master/.github/CONTRIBUTING.md) for details.

## Security

If you discover any security related issues, please email [aqangeles@gmail.com](mailto:aqangeles@gmail.com) instead of using the issue tracker.

## Credits

- [Arjay Angeles](https://github.com/yajra)
- [All Contributors](https://github.com/yajra/laravel-datatables-fractal/graphs/contributors)

## License

The MIT License (MIT). Please see [License File](https://github.com/yajra/laravel-datatables-fractal/blob/master/LICENSE.md) for more information.

## Buy me a beer
<a href='https://pledgie.com/campaigns/29515'><img alt='Click here to lend your support to: Laravel Datatables and make a donation at pledgie.com !' src='https://pledgie.com/campaigns/29515.png?skin_name=chrome' border='0' ></a>
