# laravel-dingtalk

钉钉 SDK for Laravel 5 / Lumen， 基于 [mingyoung/dingtalk](https://github.com/mingyoung/dingtalk)

## 框架要求

Laravel/Lumen >= 5.1

## 安装

```shell
composer require "calchen/laravel-dingtalk:~1.0"
```

## 配置

### Laravel 应用

1. 在 `config/app.php` 注册 ServiceProvider 和 Facade (Laravel 5.5 无需手动注册)

```php
'providers' => [
    // ...
    Calchen\LaravelDingTalk\ServiceProvider::class,
],
'aliases' => [
    // ...
    'DingTalk' => Calchen\LaravelDingTalk\Facade::class,
],
```

2. 创建配置文件：

```shell
php artisan vendor:publish --provider="Calchen\LaravelDingTalk\ServiceProvider"
```

3. 修改应用根目录下的 `config/dingtalk.php` 中对应的参数即可。

### Lumen 应用

1. 在 `bootstrap/app.php` 中 82 行左右：

```php
$app->register(Calchen\LaravelDingTalk\ServiceProvider::class);
```

2. 如果你习惯使用 `config/dingtalk.php` 来配置的话，将 `vendor/calchen/laravel-dingtalk/src/config.php` 拷贝到`项目根目录/config`目录下，并将文件名改成`dingtalk.php`。

## 使用

todo

会逐步增加 OAuth 相关的中间件、控制器及路由


更多 SDK 的具体使用请参考：https://docs.easydingtalk.org

## License

MIT
