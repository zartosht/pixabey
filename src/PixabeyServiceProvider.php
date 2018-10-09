<?php

namespace Zartosht\Pixabey;

use Illuminate\Support\ServiceProvider;

class PixabeyServiceProvider extends ServiceProvider
{

	public function boot()
	{
		$this->publishes([
			__DIR__.'/config.php' => config_path('pixabey.php'),
		]);
	}

	/**
	 * @return void
	 */
	public function register()
	{
		$this->app->singleton('Pixabey', function () {
			return new PixabeyService();
		}
		);
	}

	/**
	 * @return array
	 */
	public function provides()
	{
		return ['Pixabey'];
	}
}