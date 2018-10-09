<?php

namespace Zartosht\Pixabey;

use Ixudra\Curl\Facades\Curl;
use stdClass;

class Builder
{
	const API_BASE_URL = "https://pixabay.com/api/";

	/** @var array $curlOptions Array of cURL options */
	protected $searchOptions = [
		'lang' => "en",
		'image_type' => "all",
		'orientation' => "all",
		'min_width' => 0,
		'min_height' => 0,
		'editors_choice' => false,
		'safesearch' => false,
		'order' => "popular",
		'page' => 1,
		'per_page' => 20,
	];

	/** @var array $packageOptions Array with options that are not specific to cURL but are used by the package */
	protected $methods = [
		'InCategory',
		'Photos',
		'Illustrations',
		'Vectors',
		'Horizontals',
		'Verticals',
		'InColor',
		'Safe',
		'EditorsChoice',
		'Latest',
	];

	public function search($q)
	{
		$response = Curl::to(self::API_BASE_URL);
	}
	
	public function InCategory($category)
	{
		$acceptedCategories = ["fashion", "nature", "backgrounds", "science", "education", "people", "feelings", "religion", "health", "places", "animals", "industry", "food", "computer", "sports", "transportation", "travel", "buildings", "business", "music"];
	}
}