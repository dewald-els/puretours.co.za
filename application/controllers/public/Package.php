<?php defined('BASEPATH') OR exit('No direct script access allowed');
require_once APPPATH.'classes/oPackage.php';

/**
 * Class Package
 * @property Package_m $package_m
 * @property \PT_Classes\oPackage $package
 */
class Package extends MY_Controller
{
    private $package;

    public function __construct()
    {
        parent::__construct();
    }
    
    public function index($id, $name)
    {

        $this->resources->add_css('assets/plugins/unslider/css/unslider.css');
        $this->resources->add_css('assets/plugins/unslider/css/unslider-dots.css');
        $this->resources->add_js('assets/plugins/unslider/js/unslider-min.js');
        $this->resources->add_js('application/views/modules/sliders/package-gallery/script.js');

        $this->load->model('package_m');
        $this->package = $this->package_m->get_package($id);
        $this->resources->add_data('package', $this->package);
        $this->resources->add_subview('public/pages/package/index');
        $this->layout_public();
    }
}