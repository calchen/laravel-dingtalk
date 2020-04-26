<h1 align="center"> laravel-dingtalk </h1>

<p align="center"> Dingtalk SDK for Laravel/Lumen </p>

<p align="center">
    <a href="https://packagist.org/packages/calchen/laravel-dingtalk">
        <img alt="Latest Stable Version" src="https://img.shields.io/packagist/v/calchen/laravel-dingtalk.svg">
    </a>
    <a href="https://packagist.org/packages/calchen/laravel-dingtalk">
        <img alt="Total Downloads" src="https://img.shields.io/packagist/dt/calchen/laravel-dingtalk.svg">
    </a>
    <a href="https://github.com/calchen/laravel-dingtalk/blob/master/LICENSE">
        <img alt="License" src="https://img.shields.io/github/license/calchen/laravel-dingtalk.svg">
    </a>
</p>

> [中文](https://github.com/calchen/laravel-dingtalk/blob/master/README.md)

Depend on [mingyoung/dingtalk](https://github.com/mingyoung/dingtalk)

## Installing

```shell
$ composer require calchen/laravel-dingtalk
```

### Laravel

For Laravel >=5.5, no need to manually add `DingtalkServiceProvider` into config. It uses package auto discovery feature. Skip this if you are on >=5.5, if not: 

Open your `AppServiceProvider` (located in `app/Providers`) and add this line in `register` function
```php
$this->app->register(\Calchen\LaravelDingtalk\DingtalkServiceProvider::class);
```
or open your `config/app.php` and add this line in `providers` section
```php
Calchen\LaravelDingtalk\DingtalkServiceProvider::class,
```

Publish configuration file from `vendor/calchen/laravel-dingtalk/config/dingtalk.php` to `config/dingtalk.php`
```shell
php artisan vendor:publish --provider="Calchen\LaravelDingtalk\AliyunOssServiceProvider"
```

### Lumen

Open your `bootstrap/app.php` and add this line
```php
$app->register(Calchen\LaravelDingtalk\DingtalkServiceProvider::class);
```

Copy configuration file from `vendor/calchen/laravel-dingtalk/config/dingtalk.php` to `config/dingtalk.php`

## Configuration

Please check docs here [EasyDingTalk](https://docs.easydingtalk.org/start.html)

## Usage

Please check docs here [EasyDingTalk](https://docs.easydingtalk.org/start.html)

## License

[MIT](http://opensource.org/licenses/MIT)