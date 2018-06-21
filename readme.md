# VoyagerArticles

[![Latest Version on Packagist][ico-version]][link-packagist]
[![Total Downloads][ico-downloads]][link-downloads]
[![Build Status][ico-travis]][link-travis]
<a href="https://styleci.io/repos/138051317/shield?style=flat"><img src="https://styleci.io/repos/138051317/shield?style=flat" alt="Build Status"></a>


Laravel Voyager Articles BREAD. 
## Installation

Via Composer

``` bash
$ composer require codelabs/voyagerarticles
```

## Usage

Publish the config file (choose `voyagerarticles.config`)
``` bash
php artisan vendor:publish 
```
Seed the Voyager database tables
``` bash
php artisan db:seed --class="Codelabs\VoyagerArticles\Database\Seeds\DatabaseSeeder"     
```
Done!
## Change log

* Initial Development

## Testing

``` bash
$ composer test
```

## Contributing

Please see [contributing.md](contributing.md) for details and a todolist.

## Security

If you discover any security related issues, please email shawn@codelabs.ca instead of using the issue tracker.

## Credits

- [Shawn Mayzes](https://codelabs.ca)
- [All Contributors][link-contributors]

## License

MIT. Please see the [license file](license.md) for more information.

[ico-version]: https://img.shields.io/packagist/v/codelabs/voyagerarticles.svg?style=flat-square
[ico-downloads]: https://img.shields.io/packagist/dt/codelabs/voyagerarticles.svg?style=flat-square
[ico-travis]: https://img.shields.io/travis/codelabs/voyagerarticles/master.svg?style=flat-square
[ico-styleci]: https://styleci.io/repos/138051317/shield

[link-packagist]: https://packagist.org/packages/codelabs/voyagerarticles
[link-downloads]: https://packagist.org/packages/codelabs/voyagerarticles
[link-travis]: https://travis-ci.org/codelabs/voyagerarticles
[link-styleci]: https://styleci.io/repos/138051317
[link-author]: https://github.com/codelabs
[link-contributors]: ../../contributors]
