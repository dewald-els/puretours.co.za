<?php

defined('BASEPATH') OR exit('No direct script access allowed');
/**
 * Created by PhpStorm.
 * User: forest-sumo
 * Date: 2016/10/27
 * Time: 8:24 AM
 */
class Login extends MY_Controller
{
    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        $this->resources->add_subview('cms/pages/login/index');
        $this->layout_cms('Login', 'cms/_layout_bare');
    }
}