<?php

namespace Zartosht\Pixabey\Facades;

use Illuminate\Support\Facades\Facade;

class Pixabey extends Facade {

	/**
	 * @return string
	 */
	protected static function getFacadeAccessor()
	{
		return 'Pixabey';
	}

}