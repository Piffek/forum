<?php

namespace Piwko\Forum;

use Illuminate\Support\ServiceProvider;

class ForumServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
	protected function baseDir()
	{
		return __DIR__ . '/';
	}
	
	
    public function boot()
    {
    	$this->app['router']->group(['namespace' => 'Piwko\Forum\Controller'], function () {
    		$this->loadRoutesFrom($this->baseDir().'routes/web.php');
    		$this->loadViewsFrom($this->baseDir().'view', 'view');
    	});
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {

    }
}
