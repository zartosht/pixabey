<?php

namespace Zartosht\Pixabey;

use Ixudra\Curl\Facades\Curl;
use stdClass;

class Builder
{
    const API_BASE_URL = "https://pixabay.com/api/";
    const OUT_OF_RANGE_ERROR = '[ERROR 400] "page" is out of valid range.';

    /** @var array $searchOptions Array of api options */
    protected $searchOptions = [
        "q" => "",
        "lang" => "en",
        "image_type" => "all",
        "orientation" => "all",
        "min_width" => 0,
        "min_height" => 0,
        "editors_choice" => false,
        "safesearch" => false,
        "order" => "popular",
        "page" => 1,
        "per_page" => 20,
        "colors" => "",
        "category" => ""
    ];
    /** @var array $defaultOptions Array of api options */
    protected $defaultOptions = [
        "q" => "",
        "lang" => "en",
        "image_type" => "all",
        "orientation" => "all",
        "min_width" => 0,
        "min_height" => 0,
        "editors_choice" => false,
        "safesearch" => false,
        "order" => "popular",
        "page" => 1,
        "per_page" => 20,
        "colors" => "",
        "category" => ""
    ];

    protected function getBaseUrl()
    {
        return self::API_BASE_URL;
    }

    /**
     * Set any specific API option
     *
     * @param   string $key The name of the api option
     * @param   string $value The value to which the option is to be set
     * @return Builder
     */
    protected function withOption($key, $value)
    {
        $this->searchOptions[$key] = $value;
        return $this;
    }

    /**
     * Set lang
     *
     * @param   string $lang
     * @return Builder
     */
    protected function setLang($lang)
    {
        return $this->withOption("lang", $lang);
    }

    /**
     * Set Image Type
     *
     * @param   string $image_type
     * @return Builder
     */
    protected function setImageType($image_type)
    {
        return $this->withOption("image_type", $image_type);
    }

    /**
     * Set Orientation
     *
     * @param   string $orientation
     * @return Builder
     */
    protected function setOrientation($orientation)
    {
        return $this->withOption("orientation", $orientation);
    }

    /**
     * Set Category
     *
     * @param   string $category
     * @return Builder
     */
    protected function setCategory($category)
    {
        return $this->withOption("category", $category);
    }

    /**
     * Set Min Width
     *
     * @param   string $min_width
     * @return Builder
     */
    protected function setMinWidth($min_width)
    {
        return $this->withOption("min_width", $min_width);
    }

    /**
     * Set Min Height
     *
     * @param   string $min_heigth
     * @return Builder
     */
    protected function setMinHeight($min_heigth)
    {
        return $this->withOption("min_heigth", $min_heigth);
    }

    /**
     * Set Colors
     *
     * @param   string $colors
     * @return Builder
     */
    protected function setColors($colors)
    {
        return $this->withOption("colors", $colors);
    }

    /**
     * Set Editors Choice
     *
     * @param   string $editors_choice
     * @return Builder
     */
    protected function setEditorsChoice($editors_choice)
    {
        return $this->withOption("editors_choice", $editors_choice);
    }

    /**
     * Set Safe Search
     *
     * @param   string $safesearch
     * @return Builder
     */
    protected function setSafeSearch($safesearch)
    {
        return $this->withOption("safesearch", $safesearch);
    }

    /**
     * Set Order
     *
     * @param   string $order
     * @return Builder
     */
    protected function setOrder($order)
    {
        return $this->withOption("order", $order);
    }

    /**
     * Set Page
     *
     * @param   string $page
     * @return Builder
     */
    protected function setPage($page)
    {
        return $this->withOption("page", $page);
    }

    /**
     * Set Per Page
     *
     * @param   string $per_page
     * @return Builder
     */
    protected function setPerPage($per_page)
    {
        return $this->withOption("per_page", $per_page);
    }

    /**
     * Set image type to `photos`
     *
     * @return Builder
     */
    public function Photos()
    {
        return $this->setImageType("photos");
    }

    /**
     * Set image type to `illustrations`
     *
     * @return Builder
     */
    public function Illustrations()
    {
        return $this->setImageType("illustrations");
    }

    /**
     * Set image type to `vectors`
     *
     * @return Builder
     */
    public function Vectors()
    {
        return $this->setImageType("vectors");
    }

    /**
     * Set orientation to `horizontals`
     *
     * @return Builder
     */
    public function Horizontals()
    {
        return $this->setImageType("horizontal");
    }

    /**
     * Set orientation to `verticals`
     *
     * @return Builder
     */
    public function Verticals()
    {
        return $this->setImageType("verticals");
    }

    /**
     * Set category to `fashion`
     *
     * @return Builder
     */
    public function Fashions()
    {
        return $this->setCategory("fashion");
    }

    /**
     * Set category to `nature`
     *
     * @return Builder
     */
    public function Natures()
    {
        return $this->setCategory("nature");
    }

    /**
     * Set category to `backgrounds`
     *
     * @return Builder
     */
    public function Backgrounds()
    {
        return $this->setCategory("backgrounds");
    }

    /**
     * Set category to `science`
     *
     * @return Builder
     */
    public function Sciences()
    {
        return $this->setCategory("science");
    }

    /**
     * Set category to `education`
     *
     * @return Builder
     */
    public function Educations()
    {
        return $this->setCategory("education");
    }

    /**
     * Set category to `people`
     *
     * @return Builder
     */
    public function Peoples()
    {
        return $this->setCategory("people");
    }

    /**
     * Set category to `feelings`
     *
     * @return Builder
     */
    public function Feelings()
    {
        return $this->setCategory("feelings");
    }

    /**
     * Set category to `religion`
     *
     * @return Builder
     */
    public function Religions()
    {
        return $this->setCategory("religion");
    }

    /**
     * Set category to `health`
     *
     * @return Builder
     */
    public function Healths()
    {
        return $this->setCategory("health");
    }

    /**
     * Set category to `places`
     *
     * @return Builder
     */
    public function Places()
    {
        return $this->setCategory("places");
    }

    /**
     * Set category to `animals`
     *
     * @return Builder
     */
    public function Animals()
    {
        return $this->setCategory("animals");
    }

    /**
     * Set category to `industry`
     *
     * @return Builder
     */
    public function Industries()
    {
        return $this->setCategory("industry");
    }

    /**
     * Set category to `food`
     *
     * @return Builder
     */
    public function Foods()
    {
        return $this->setCategory("food");
    }

    /**
     * Set category to `computer`
     *
     * @return Builder
     */
    public function Computers()
    {
        return $this->setCategory("computer");
    }

    /**
     * Set category to `sports`
     *
     * @return Builder
     */
    public function Sports()
    {
        return $this->setCategory("sports");
    }

    /**
     * Set category to `transportation`
     *
     * @return Builder
     */
    public function Transportations()
    {
        return $this->setCategory("transportation");
    }

    /**
     * Set category to `travel`
     *
     * @return Builder
     */
    public function Travel()
    {
        return $this->setCategory("travel");
    }

    /**
     * Set category to `buildings`
     *
     * @return Builder
     */
    public function Buildings()
    {
        return $this->setCategory("buildings");
    }

    /**
     * Set category to `business`
     *
     * @return Builder
     */
    public function Businesses()
    {
        return $this->setCategory("business");
    }

    /**
     * Set category to `music`
     *
     * @return Builder
     */
    public function Musics()
    {
        return $this->setCategory("music");
    }

    /**
     * Set colors to `grayscale`
     *
     * @return Builder
     */
    public function Grayscales()
    {
        return $this->setColors("grayscale");
    }

    /**
     * Set colors to `transparent`
     *
     * @return Builder
     */
    public function Transparents()
    {
        return $this->setColors("transparent");
    }

    /**
     * Set colors to `red`
     *
     * @return Builder
     */
    public function Reds()
    {
        return $this->setColors("red");
    }

    /**
     * Set colors to `orange`
     *
     * @return Builder
     */
    public function Oranges()
    {
        return $this->setColors("orange");
    }

    /**
     * Set colors to `yellow`
     *
     * @return Builder
     */
    public function Yellows()
    {
        return $this->setColors("yellow");
    }

    /**
     * Set colors to `green`
     *
     * @return Builder
     */
    public function Greens()
    {
        return $this->setColors("green");
    }

    /**
     * Set colors to `turquoise`
     *
     * @return Builder
     */
    public function Turquoises()
    {
        return $this->setColors("turquoise");
    }

    /**
     * Set colors to `blue`
     *
     * @return Builder
     */
    public function Blues()
    {
        return $this->setColors("blue");
    }

    /**
     * Set colors to `lilac`
     *
     * @return Builder
     */
    public function Lilacs()
    {
        return $this->setColors("lilac");
    }

    /**
     * Set colors to `pink`
     *
     * @return Builder
     */
    public function Pinks()
    {
        return $this->setColors("pink");
    }

    /**
     * Set colors to `white`
     *
     * @return Builder
     */
    public function Whites()
    {
        return $this->setColors("white");
    }

    /**
     * Set colors to `gray`
     *
     * @return Builder
     */
    public function Grays()
    {
        return $this->setColors("gray");
    }

    /**
     * Set colors to `black`
     *
     * @return Builder
     */
    public function Blacks()
    {
        return $this->setColors("black");
    }

    /**
     * Set colors to `brown`
     *
     * @return Builder
     */
    public function Browns()
    {
        return $this->setColors("brown");
    }

    /**
     * Set editors_choice to `true`
     *
     * @return Builder
     */
    public function EditorsChoices()
    {
        return $this->setEditorsChoice(true);
    }

    /**
     * Set safesearch to `true`
     *
     * @return Builder
     */
    public function SafeSearch()
    {
        return $this->setSafeSearch(true);
    }

    /**
     * Set order to `latest`
     *
     * @return Builder
     */
    public function Latests()
    {
        return $this->setOrder("latest");
    }

    /**
     * Set page to `$page`
     *
     * @return Builder
     */
    public function Page($page)
    {
        return $this->setPage($page);
    }

    /**
     * Set per_page to `$per_page`
     *
     * @return Builder
     */
    public function PerPage($per_page)
    {
        return $this->setPerPage($per_page);
    }

    public function search($q)
    {
        return $this->withOption("q", $q);
    }

    protected function removeEmptyOptions()
    {
        foreach ($this->searchOptions as $key => $value){
            if ($value == $this->defaultOptions[$key])
                unset($this->searchOptions[$key]);
        }
        $this->searchOptions['key'] = config("pixabey.api-key");
    }

    public function get()
    {
        $this->removeEmptyOptions();
        $response = Curl::to(self::API_BASE_URL)
            ->withData($this->searchOptions)->get();
        if ($response == self::OUT_OF_RANGE_ERROR) {
            throw new Exception(self::OUT_OF_RANGE_ERROR, 416);
        }
        return json_decode($response);
    }

    public function post()
    {
        $this->removeEmptyOptions();
        $response = Curl::to(self::API_BASE_URL)
            ->withData($this->searchOptions)->post();
        if ($response == self::OUT_OF_RANGE_ERROR) {
            throw new Exception(self::OUT_OF_RANGE_ERROR, 416);
        }
        return json_decode($response);
    }
}
