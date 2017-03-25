<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Pureski extends MY_Controller
{
    public function __construct()
    {
        parent::__construct();
    }
    
    public function index()
    {
        $this->resources->add_subview('public/pages/pureski/index');
        $this->layout_public();
    }
}