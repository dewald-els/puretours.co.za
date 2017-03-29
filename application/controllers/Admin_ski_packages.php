<?php defined('BASEPATH') OR exit('No direct script access allowed');
require_once APPPATH.'controllers/Ski_packages.php';
/**
 * Created by PhpStorm.
 * User: forest-sumo
 * Date: 2017/03/29
 * Time: 6:04 PM
 */

/**
 * Class Admin_login

 */
class Admin_ski_packages extends MY_Controller {
    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        $this->load->model('package_m');
        $this->resources->add_data('packages', $this->package_m->get_category_packages(Ski_packages::PACKAGE_CATEGORY));
        $this->resources->add_data('page_title', 'Ski packages');
        $this->resources->add_subview('cms/pages/ski_packages/index');
        $this->layout_cms();
    }
}