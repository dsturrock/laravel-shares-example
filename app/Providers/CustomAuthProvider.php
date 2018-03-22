<?php namespace App\Providers;

use App\Auth\CustomEloquentUserProvider;

use Illuminate\Support\ServiceProvider;

class CustomAuthProvider extends ServiceProvider 
{
	/**
	 * Bootstrap the application services.
	 *
	 * @return void
	 */
	public function boot()
	{

	    \Auth::provider('custom',function($app, array $config)
	    {
	        return new CustomEloquentUserProvider($app['hash'], $config['model']);
	    });
	}

	/**
	 * Register the application services.
	 *
	 * @return void
	 */
	public function register()
	{
	    //
	}
}
