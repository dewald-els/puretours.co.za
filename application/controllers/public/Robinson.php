<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Robinson extends MY_Controller
{
    public function __construct()
    {
        parent::__construct();
    }
    
    public function index()
    {
        $this->resources->add_subview('public/pages/robinson/index');
        $this->layout_public();
    }
}