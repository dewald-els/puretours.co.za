<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**
 * Created by PhpStorm.
 * User: forest-sumo
 * Date: 2016/10/27
 * Time: 7:41 AM
 */
class Pages extends MY_Controller
{
    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        $this->layout_cms('Pages');
    }


}