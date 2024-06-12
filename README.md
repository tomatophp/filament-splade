![Screenshot](https://raw.githubusercontent.com/tomatophp/filament-splade/master/arts/3x1io-tomato-splade.jpg)

# Filament Splade Integration

[![Latest Stable Version](https://poser.pugx.org/tomatophp/filament-splade/version.svg)](https://packagist.org/packages/tomatophp/filament-splade)
[![PHP Version Require](http://poser.pugx.org/tomatophp/filament-splade/require/php)](https://packagist.org/packages/tomatophp/filament-splade)
[![License](https://poser.pugx.org/tomatophp/filament-splade/license.svg)](https://packagist.org/packages/tomatophp/filament-splade)
[![Downloads](https://poser.pugx.org/tomatophp/filament-splade/d/total.svg)](https://packagist.org/packages/tomatophp/filament-splade)

Integration of [Splade](https://splade.dev/) Vue Components for Filament

**NOTE:**
this project still out of filament style, and we are working to move style to filament for all component and merge the component to the Form/Table Components.

## Screenshots

![Screenshot](https://raw.githubusercontent.com/tomatophp/filament-splade/master/arts/form.png)
![Screenshot](https://raw.githubusercontent.com/tomatophp/filament-splade/master/arts/modal.png)
![Screenshot](https://raw.githubusercontent.com/tomatophp/filament-splade/master/arts/slideover.png)
![Screenshot](https://raw.githubusercontent.com/tomatophp/filament-splade/master/arts/table.png)

## Installation

```bash
composer require tomatophp/filament-splade
```

after install your package please run this command

```bash
php artisan filament-splade:install
```

now you need to build your js assets

```bash
yarn
yarn build
```

## Usage

to make any page or resource interact with splade you just need to use this trait

```php
use TomatoPHP\FilamentSplade\Traits\InteractsWithSplade;
```

now you can use any splade component inside your resource.

if you like to use splade everywhere reigster the plugin on `/app/Providers/Filament/AdminPanelProvider.php`

```php
->plugin(\TomatoPHP\FilamentSplade\FilamentSpladePlugin::make())
```

and make sure that you are `global_allow => true` on the config file.

## Register Splade Exceptions

on your `boostrap/app.php` file add this line

```php
->withExceptions(function (Exceptions $exceptions) {
    $exceptions->renderable(function (\Illuminate\Foundation\Exceptions\Handler $e) {
        return \ProtoneMedia\Splade\SpladeCore::exceptionHandler($e);
    });
})
```

## Publish Assets

you can publish config file by use this command

```bash
php artisan vendor:publish --tag="filament-splade-config"
```

## Support

you can join our discord server to get support [TomatoPHP](https://discord.gg/Xqmt35Uh)

## Docs

you can check docs of this package on [Docs](https://docs.tomatophp.com/filament/filament-splade)

## Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information on what has changed recently.

## Security

Please see [SECURITY](SECURITY.md) for more information about security.

## Credits

- [Fady Mondy](https://wa.me/+201207860084)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
