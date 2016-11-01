<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**
 * Created by PhpStorm.
 * User: forest-sumo
 * Date: 2016/10/27
 * Time: 7:41 AM
 */

/**
 * Class Pages
 * @property Page_m $page_m
 */
class Pages extends MY_Controller
{
    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        $this->resources->add_subview('cms/pages/pages/index');

        $this->layout_cms('Pages');
    }

    public function get_pages()
    {
        $this->load->model('page_m');
        $pages = $this->page_m->get_page_list();
        echo json_encode(array(
            'data' => $pages
        ));
    }

    public function get_page_modules()
    {
        $post = $this->get_post();
        $this->load->model('page_m');
        $modules = $this->page_m->get_page_modules($post->page_id);
        echo json_encode(array(
            'data' => $modules
        ));
    }

    public function edit_page()
    {
        $page_id = $this->uri->segment(3);
        if (!$page_id)
        {
            redirect('admin/pages');
        }
        $this->load->model('page_m');
        $page = $this->page_m->get_page_detail($page_id);
        $this->resources->add_data('page', $page);
        $this->resources->add_subview('cms/pages/pages/edit-page');
        $this->layout_cms('Edit Page');

    }
}