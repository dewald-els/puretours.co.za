<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Robinson_packages extends MY_Controller
{
    const PACKAGE_CATEGORY = '3';

    public function __construct()
    {
        parent::__construct();
    }
    
    public function index()
    {
        $packages = array();
        $this->resources->add_data('packages', $packages);
        $this->resources->add_subview('public/pages/robinson-packages/index');
        $this->resources->add_js('assets/plugins/match-height/jquery.matchHeight-min.js');
        $this->resources->add_js('application/views/modules/pages/packages/script.js');

        $this->layout_public();
    }
}