<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends MY_Controller
{
    public function __construct()
    {
        parent::__construct();
    }
    
    public function index()
    {
        $this->resources->add_css('assets/plugins/unslider/css/unslider.css');
        $this->resources->add_css('assets/plugins/unslider/css/unslider-dots.css');
        $this->resources->add_js('assets/plugins/unslider/js/unslider-min.js');
        $this->resources->add_js('application/views/modules/sliders/top5locations/script.js');

        $this->resources->add_subview('public/pages/home/index');
        $this->layout_public();
    }
}