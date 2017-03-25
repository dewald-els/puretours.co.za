<?php
/**
 * Created by PhpStorm.
 * User: forest-sumo
 * Date: 2017/03/19
 * Time: 9:13 AM
 */

namespace PT_Classes;

class oResort {

    public $resort_id;
    public $resort_name;
    public $country_id;
    public $resort_description;
    public $country_name;
    public $banner;

    public function __construct($resort = NULL)
    {
        if ( ! is_null($resort) )
        {
            $this->resort_id = $resort->resort_id;
            $this->resort_name = $resort->resort_name;
            $this->resort_description = $resort->resort_description;
            $this->country_name = $resort->country_name;
            $this->banner = $resort->banner;

        }
    }

}