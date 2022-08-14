<p align="center"><img src="/art/logo.svg" alt="Logo Breeze"></p>

<p align="center">
    <a href="https://packagist.org/packages/irsyadadl/fence">
        <img src="https://img.shields.io/packagist/dt/irsyadadl/fence" alt="Total Downloads">
    </a>
    <a href="https://packagist.org/packages/irsyadadl/fence">
        <img src="https://img.shields.io/packagist/v/irsyadadl/fence" alt="Latest Stable Version">
    </a>
    <a href="https://packagist.org/packages/irsyadadl/fence">
        <img src="https://img.shields.io/packagist/l/irsyadadl/fence" alt="License">
    </a>
</p>

## Introduction
Fence is a package for authentication views using Laravel fortify package! It using tailwind css!

> Hey, Make you sure you do not include `fence` into __your existing app__. Please add `fence` in your new laravel project.
### Install
```bash
$ laravel new app
```
Next, you will need to install the [fortify package](https://github.com/laravel/fortify), it's required.

```bash
composer require laravel/fortify
```

Next, publish Fortify's resources using the `vendor:publish` command:

```bash
php artisan vendor:publish --provider="Laravel\Fortify\FortifyServiceProvider"
```

Next, you will need to register `FortifyServiceProvider` in the `config/app.php`. Open that file, and add this one line of code.

```php
'providers' => [
    // ...
    App\Providers\FortifyServiceProvider::class,
],
```

And now you can required this package like so:

```bash
composer require irsyadadl/fence
```
Now, you can install fence by running this command:
```bash
php artisan fence:install
```
Now you make your database connection. And run `php artisan migrate`.

Done.
