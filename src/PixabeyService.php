<?php

namespace Zartosht\Pixabey;

use Ixudra\Curl\Facades\Curl;

class PixabeyService
{
    public function Search($q = "")
    {
        $builder = new Builder();

        return $builder->search($q);
    }

}
