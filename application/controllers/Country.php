<?php defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * Class Country
 * @property Country_m $country_m
 */
class Country extends MY_Controller
{
    public function __construct()
    {
        parent::__construct();
    }
    
    public function index()
    {
    }

    public function get_available_countries()
    {
        $this->load->model('country_m');
        $countries = $this->country_m->get_available_countries();
        $this->responder->as_json(array(
            'countries' => $countries,
        ));
    }
}