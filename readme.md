# Maintenance Commands

This library based on Symfony/Console. If you are using symfony/console package for your console application, you can use this too. The library has two commands which are `down` and `up`. 
> If you are using Laravel Framework, you don't need this. :)

## Installation

To install through composer, simply put the following in your `composer.json` file:

```json
{
    "require": {
        "ozziest/maintenance": "1.*",
    }
}
```

## Usage

You must add commands to your console application;

```php 
$console->add(new Ozziest\Maintenance\Up('app/cache'));
$console->add(new Ozziest\Maintenance\Down('app/cache'));
```

> You must define writable path.

`index.php`
```php 
Ozziest\Maintenance\Maintenance::check('app/cache', 'This is a maintenance message.');
```

## License

MIT
