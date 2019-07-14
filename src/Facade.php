<?php

namespace Calchen\LaravelDingTalk;

use EasyDingTalk\Application;
use Illuminate\Support\Facades\App;

class Facade
{
    protected static function getFacadeAccessor()
    {
        return 'dingtalk';
    }

    /**
     * @return Application
     */
    public static function app()
    {
        return App::make('dingtalk');
    }
}