<?php defined('BASEPATH') OR exit('No direct script access allowed');

require_once APPPATH.'controllers/Sport_packages.php';

/**
 * Created by PhpStorm.
 * User: forest-sumo
 * Date: 2017/03/29
 * Time: 6:04 PM
 * Class Admin_login

 */
class Admin_sport_packages extends MY_Controller {
    public function __construct()
    {
        parent::__construct();
    }


    public function index()
    {
        $this->load->model('package_m');

        $start = 0;
        $end = 10;

        $this->get_pagination($start, $end);

        $this->load->library('pagination');
        $config['num_tag_open'] = '<li>';
        $config['num_tag_close'] = '</li>';
        $config['next_tag_open'] = '<li>';
        $config['next_tag_close'] = '</li>';
        $config['prev_tag_open'] = '<li>';
        $config['prev_tag_close'] = '</li>';
        $config['cur_tag_open'] = '<li class="active"><span>';
        $config['cur_tag_close'] = '</span></li>';
        $config['base_url'] = site_url('admin/sport-packages');
        $config['total_rows'] = $this->package_m->count_category_packages(Sport_packages::PACKAGE_CATEGORY);
        $config['per_page'] = 10;

        $this->pagination->initialize($config);

        $this->resources->add_data('start', $start);
        $this->resources->add_data('pagination_links', $this->pagination->create_links());
        $this->resources->add_data('current_page', $this->pagination->cur_page);

        $this->resources->add_data('packages', $this->package_m->get_category_packages(Sport_packages::PACKAGE_CATEGORY, $start, $end));
        $this->resources->add_data('page_title', 'Sport packages');
        $this->resources->add_subview('cms/pages/sport_packages/index');
        $this->layout_cms();
    }

    private function get_pagination(&$start, &$end) {
        if ($this->uri->segment(3)) {
            $start = $this->uri->segment(3);
            $end = $start + 10;
        }
    }
}