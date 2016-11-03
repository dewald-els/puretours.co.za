<?php defined('BASEPATH') OR exit('No direct script access allowed');
/**
 * Created by PhpStorm.
 * User: dewaldels
 * Date: 2016/07/09
 * Time: 10:32 AM
 */

/**
 * Class MY_Controller
 * LIBRARIES
 * @property Resources $resources
 * @property Page_m $page_m
 * @property User_m $user_m
 */
class MY_Controller extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('resources');

    }

    protected function get_page_content() 
    {
        $url = $this->uri->segment(1);
        $url = $url == NULL ? 'home' : $url;
        $this->load->model('page_m');
        $page = $this->page_m->get_page_content($url);
        $this->resources->add_data('page', $page);
        $this->resources->header = $page->show_header;
        $this->resources->footer = $page->show_footer;
    }

    public function layout_public() 
    {
        $this->resources->load_defaults();
        $this->load->view('public/_layout_main');
    }

    public function layout_cms($page_title = '', $layout = 'cms/_layout_main')
    {
        $this->resources->page_title = $page_title;
        $this->resources->load_defaults('CMS');
        $this->load->view($layout);
    }

    protected function verify_login(&$layout)
    {
        $this->load->model('user_m');
        $user = $this->user_m->logged_in();
        $this->resources->add_data('user', $user);
        if ($user == false) {
            //redirect('login');
        }
    }

    protected function get_post()
    {
        return $_POST;
    }

    protected function debug($data) {
        echo '<pre>';
        print_r($data);
        echo '</pre>';
    }
}