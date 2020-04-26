<h1 align="center"> laravel-dingtalk </h1>

<p align="center"> 钉钉 SDK Laravel/Lumen 扩展包 </p>

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

> [English](https://github.com/calchen/laravel-dingtalk/blob/master/README_en.md)

基于 [mingyoung/dingtalk](https://github.com/mingyoung/dingtalk) 封装的钉钉 SDK

## 安装

```shell
$ composer require calchen/laravel-dingtalk
```

### Laravel

如果您的 Laravel 版本为 5.5 及以上，您不需要手动的配置文件中添加 `DingtalkServiceProvider` Laravel 自带的扩展包发现机制会处理好一切。如是小于 5.5 版本那么需要您进行如下操作: 

打开位于 `app/Providers` 的 `AppServiceProvider.php` 文件并在 `register` 函数中添加如下内容：
```php
$this->app->register(\Calchen\LaravelDingtalk\DingtalkServiceProvider::class);
```
您也可以在配置文件 `config/app.php` 中的 `providers` 中添加如下内容：
```php
Calchen\LaravelDingtalk\AliyunOssServiceProvider::class,
```
只需选择以上操作中的一种，即可加载本扩招包。

再完成加载配置之后还需要将配置文件发布出来：
```shell
php artisan vendor:publish --provider="Calchen\LaravelDingtalk\AliyunOssServiceProvider"
```

### Lumen

Lumen 并未移植扩展包自动发现机制，所以需要手动加载扩展包并复制配置文件。

打开配置文件 `bootstrap/app.php` 并在大约 81 行左右添加如下内容：
```php
$app->register(Calchen\LaravelDingtalk\AliyunOssServiceProvider::class);
```

将文件系统配置文件从 `vendor/calchen/laravel-dingtalk/config/dingtalk.php` 复制到 `config/dingtalk.php`

## 配置

请参考 [EasyDingTalk](https://docs.easydingtalk.org/start.html) 文档

## 用法

请参考 [EasyDingTalk](https://docs.easydingtalk.org/start.html) 文档

## 计划中功能

计划逐步增加 OAuth 相关的中间件、控制器及路由

## 开源协议

[MIT](http://opensource.org/licenses/MIT)
