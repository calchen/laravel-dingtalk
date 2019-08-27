<?php

namespace Calchen\LaravelDingtalk;

use EasyDingTalk\Application;
use Illuminate\Foundation\Application as LaravelApplication;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\ServiceProvider as LaravelServiceProvider;
use Laravel\Lumen\Application as LumenApplication;

class DingtalkServiceProvider extends LaravelServiceProvider
{
    /**
     * Boot the provider.
     */
    public function boot()
    {
    }

    /**
     * Setup the config.
     */
    protected function setupConfig()
    {
        $source = realpath(__DIR__.'/../config/dingtalk.php');

        if ($this->app instanceof LaravelApplication && $this->app->runningInConsole()) {
            $this->publishes([$source => config_path('dingtalk.php')], 'laravel-dingtalk');
        } elseif ($this->app instanceof LumenApplication) {
            $this->app->configure('dingtalk');
        }

        $this->mergeConfigFrom($source, 'dingtalk');
    }

    /**
     * Register the provider.
     */
    public function register()
    {
        $this->setupConfig();

        $this->app->singleton("dingtalk", function ($laravelApp) {
            $app = new Application(Config::get('dingtalk'));

            if (Config::get('dingtalk.use_laravel_cache')) {
                $app['cache'] = $laravelApp['cache.store'];
            }

            return $app;
        });
    }
}