<?php

namespace App;


class Mark
{
    public $country;
    public $county;
    public $town;

    public function __construct($country, $county, $town)
    {
        $this->country = $country;
        $this->county = $county;
        $this->town = $town;
    }
    
}
