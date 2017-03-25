<?php defined('BASEPATH') OR exit('No direct script access allowed');

require_once APPPATH.'classes/oResort.php';

/**
 * Class Resort
 * @property \PT_Classes\oResort $resort
 * @property Resort_m $resort_m
 */
class Resort extends MY_Controller
{
    private $resort;

    public function __construct()
    {
        parent::__construct();
    }
    
    public function index($id, $name)
    {

        $this->resources->add_css('assets/plugins/unslider/css/unslider.css');
        $this->resources->add_css('assets/plugins/unslider/css/unslider-dots.css');
        $this->resources->add_js('assets/plugins/unslider/js/unslider-min.js');
        $this->resources->add_js('application/views/modules/sliders/resort-slider/script.js');

        $this->resources->add_subview('public/pages/resort/index');
        $this->load->model('resort_m');
        $this->resort = $this->resort_m->get_resort($id);
        $this->resources->add_data('resort', $this->resort);
        $this->layout_public();
    }

    public function get_available_resorts()
    {
        $this->load->model('resort_m');
        $resorts = $this->resort_m->get_all_resorts();
        $this->responder->as_json(array(
            'resorts' => $resorts,
        ));
    }
}