<?php
namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class SwitchCacheServiceProvider extends ServiceProvider {

	public function register()
	{
		$this->app->bind('App\Repositories\ToggleCaching\WhichCacheRepositoryInterface', 'App\Repositories\ToggleCaching\DatabaseCachingRepository');
		// $this->app->bind('App\Repositories\ToggleCaching\WhichCacheRepositoryInterface', 'App\Repositories\ToggleCaching\FileCachingRepository');
	}

}
