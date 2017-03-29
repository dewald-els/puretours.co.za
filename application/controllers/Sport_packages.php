<?php defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * Class Sport_packages
 * @property Package_m $package_m
 * @property CI_Pagination $pagination
 */
class Sport_packages extends MY_Controller
{
    const PACKAGE_CATEGORY = '2';

    public function __construct()
    {
        parent::__construct();
    }

    private function get_pagination(&$start, &$end) {
        if ($this->uri->segment(2)) {
            $start = $this->uri->segment(2);
            $end = $start + 10;
        }
    }

    public function index()
    {
        $start = 0;
        $end = 10;

        $this->get_pagination($start, $end);

        $this->load->model('package_m');
        $packages = $this->package_m->get_category_packages(Sport_packages::PACKAGE_CATEGORY, $start, $end);

        $this->load->library('pagination');
        $config['base_url'] = site_url('sport-packages');
        $config['total_rows'] = $this->package_m->count_category_packages(Sport_packages::PACKAGE_CATEGORY);
        $config['per_page'] = 10;

        $this->pagination->initialize($config);

        $this->resources->add_data('pagination_links', $this->pagination->create_links());
        $this->resources->add_data('current_page', $this->pagination->cur_page);

        $this->resources->add_data('num_of_pages', ceil($config['total_rows'] / 10));
        $this->resources->add_data('packages', $packages);
        $this->resources->add_subview('public/pages/sport-packages/index');
        $this->resources->add_js('assets/plugins/match-height/jquery.matchHeight-min.js');
        $this->resources->add_js('application/views/modules/pages/packages/script.js');
        $this->layout_public();
    }
}