# Twitch RESTful API for Laravel

Note: This is forked from: https://github.com/PetterKraabol/laravel-twitch-api and will
only be maintained until that project accepts the PR's necessary to catch it up to this
package.

An easy-to-use RESTful API for Laravel 5, works with Twitch API v5

## Installation

```bash
composer require hootener/laravel-twitch-api
```

In `config/app.php`, add this provider in `providers`

```php
Hootener\TwitchApi\Providers\TwitchApiServiceProvider::class,
```

Add this facade in `aliases`

```php
'TwitchApi' => Hootener\TwitchApi\Facades\TwitchApiServiceFacade::class,
```

Publish config, then configure your `config/twitch-api.php`

```php
php artisan vendor:publish
```

## Laravel environment variables

It's recommended to add these variables in your `.env` file.

```bash
TWITCH_KEY=
TWITCH_SECRET=
TWITCH_REDIRECT_URI=
```

## Documentation

You'll find documentation markdown files in the `docs` folder.

## Changelog

A list of changes is found in `changelog.md`