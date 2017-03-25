<?php
/**
 * Created by PhpStorm.
 * User: forest-sumo
 * Date: 2017/03/12
 * Time: 1:39 PM
 */

namespace PT_Classes
{
    /**
     * Class oCountry
     * @package PT_Classes
     */
    class oCountry
    {
        public $country_id;
        public $country_name;
        public $active;

        public function __construct($country = NULL)
        {
            if ( ! is_null($country))
            {
                $this->country_id = $country->country_id;
                $this->country_name = $country->country_name;
            }
        }

    }
}