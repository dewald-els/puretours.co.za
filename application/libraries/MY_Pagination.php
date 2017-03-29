<?php

/**
 * Created by PhpStorm.
 * User: forest-sumo
 * Date: 2017/03/25
 * Time: 1:24 PM
 */
class MY_Pagination extends CI_Pagination
{
    public function __construct()
    {
        parent::__construct();
    }

    public function get_current_page() {
        return $this->cur_page;
    }

}