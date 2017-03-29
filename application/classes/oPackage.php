<?php
/**
 * Created by PhpStorm.
 * User: forest-sumo
 * Date: 2017/03/12
 * Time: 1:39 PM
 */

namespace PT_Classes
{
    require_once APPPATH.'classes/oResort.php';

    /**
     * Class Package
     * @package PT_Classes
     */
    class oPackage
    {
        public $package_id;
        public $package_name;
        public $package_description;
        public $thumbnail;
        public $tags;
        public $resort;
        public $base_price;
        public $gallery;
        public $banner;
        public $date_available;
        public $date_end;
        public $active;
        public $category;
        public $country;
        public $duration;
        public $included;
        public $excluded;
        public $url_friendly_name;

        public function __construct($package = NULL)
        {
            if ( ! is_null($package))
            {
                $this->package_id = $package->package_id;
                $this->package_name = $package->package_name;
                $this->package_description = $package->package_description;
                $this->tags = $package->tags;
                $this->active = $package->active;
                $this->date_available = $package->date_available;
                $this->date_end = $package->date_end;
                $this->country = $package->country_name;
                $this->resort = new oResort();
                $this->resort->resort_id = $package->resort_id;
                $this->resort->resort_name = $package->resort_name;
                $this->resort->resort_description = $package->resort_description;
                $this->base_price = $package->base_price;
                $this->duration = $package->duration;
                $this->excluded = $package->excluded;
                $this->included  = $package->included;
                $this->gallery  = $package->gallery;
                $this->banner = $package->banner;
                $this->url_friendly_name = str_replace(' ', '-', $this->package_name);
                $this->url_friendly_name = str_replace("'", "", $this->url_friendly_name);
            }
        }
    }
}