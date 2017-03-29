<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Contact extends MY_Controller{

    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        $this->resources->add_js('https://maps.googleapis.com/maps/api/js?key=AIzaSyDgGLsLhhjI17YizeDEDZi94aCfYScQQTI&callback=initMap');
        $this->resources->add_subview('public/pages/contact/index');
        $this->layout_public();
    }
}