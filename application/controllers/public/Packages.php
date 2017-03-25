<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Packages extends MY_Controller
{
    public function __construct()
    {
        parent::__construct();
    }
    
    public function index()
    {
        $this->resources->add_subview('public/pages/packages/index');
        $this->layout_public();
    }
}