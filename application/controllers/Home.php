<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends MY_Controller
{
    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        $this->session->set_userdata('hello', array(
            0 => 'one',
            1 => 'two'
        ));
        $this->resources->add_subview('public/pages/home/index');
        $this->layout_public();
    }

}