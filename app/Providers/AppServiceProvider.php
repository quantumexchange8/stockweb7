<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Mail;


class AppServiceProvider extends ServiceProvider
{
	/**
 	* Register any application services.
 	*
 	* @return void
 	*/
	public function register()
	{
    	//
	}

	/**
 	* Bootstrap any application services.
 	*
 	* @return void
 	*/

	public function boot()
	{
    	Config::set('app.short_company_name', 'Guolion');
        Config::set('app.full_company_name', 'Guolion Security Limited');
        
        if (App::environment('production')) {
        	resolve(\Illuminate\Routing\UrlGenerator::class)->forceScheme('https');
        	$this->app['request']->server->set('HTTPS', true);
        }
	}
}