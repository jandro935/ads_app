<?php

namespace App\Providers;

use App\Components\HtmlBuilder;
use Collective\Html\HtmlServiceProvider as CollectiveHtmlServiceProvider;

class HtmlServiceProvider extends CollectiveHtmlServiceProvider
{
    protected function registerHtmlBuilder()
    {
        $this->app->bindShared('html', function ($app) {
           return new HtmlBuilder($app['config'], $app['view'], $app['url']);
        });
    }
}
