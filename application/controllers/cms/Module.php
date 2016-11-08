<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**
 * Created by PhpStorm.
 * User: forest
 * Date: 2016/11/05
 * Time: 6:03 PM
 */

/**
 * Class Module
 * @property Module_m $module_m
 */
class Module extends MY_Controller
{
    public function __construct()
    {
        parent::__construct();
    }

    public function index($module_id, $page_id)
    {
        $this->load->model('module_m');
        $this->load->model('page_m');
        $this->resources->add_data('page', $this->page_m->get_page_detail($page_id));
        $this->resources->add_data('module', $this->module_m->get_module($module_id));

        $this->resources->add_subview('cms/pages/module/index');
        $this->layout_cms('Edit module');
    }
}