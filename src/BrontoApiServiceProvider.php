<?php

namespace Jaiwalker\BrontoApi;

use Illuminate\Support\ServiceProvider;
use Bronto_Api;
use Jaiwalker\BrontoApi\Contact\ContactApi;

class BrontoApiServiceProvider extends ServiceProvider
{

    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }


    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind('BrontoApi',function ($app){
            return new ContactApi();
        });
        //$this->app->bind('bronto', function ($app) {
        //    $token = $app['config']->get('bronto::token');
        //    $token = '1AFA2B68-F4D7-47F3-8B5D-3ECF0FF09484';
        //
        //    $bronto = new Bronto_Api();
        //    if ( ! is_null($token)) {
        //        $bronto->setToken($token);
        //        $bronto->login();
        //    }
        //
        //    return $bronto;
        //});
    }


    /**
     * Get the services provided by the provider.
     *
     * @return array
     */
    public function provides()
    {
        return ['bronto'];
    }

}
