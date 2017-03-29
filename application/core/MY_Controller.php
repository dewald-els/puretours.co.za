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
 * @property Responder $responder
 * @property Page_m $page_m
 * @property User_m $user_m
 * @property Package_m $package_m
 * @property CI_URI $uri
 * @property CI_Session $session
 * @property CI_Encryption $encryption
 */
class MY_Controller extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->library('session');
        $this->load->library('resources');
        $this->load->library('responder');
    }

    /**-----------------------------------------------------------------------------------------------------------------
     * PUBLIC
    ------------------------------------------------------------------------------------------------------------------*/

    protected function get_page_content()
    {
        $url = $this->uri->segment(1);
        $url = $url == NULL ? 'home' : $url;
        $this->load->model('page_m');
        $page = $this->page_m->get_page_content($url);
        $this->resources->add_data('page', $page);
    }

    public function layout_public() 
    {
        $this->get_page_content();
        $this->resources->load_defaults();
        $this->load->view('public/_layout_main');
    }

    protected function get_post($from_input = FALSE)
    {
        return ($from_input ? json_decode(file_get_contents("php://input")) : $_POST);
    }

    protected function debug($data) {
        echo '<pre>';
        print_r($data);
        echo '</pre>';
    }

    /**-----------------------------------------------------------------------------------------------------------------
     * CMS
    ------------------------------------------------------------------------------------------------------------------*/

    protected function verify_user()
    {
        if ($this->session->userdata('user') == FALSE) {
            if ($this->uri->segment(1) == 'admin' && $this->uri->segment(2) !== NULL && $this->uri->segment(2) !== 'login') {
                redirect(site_url('admin'));
            }
        }
    }

    protected function layout_cms($layout = 'cms/_layout_main')
    {
        $this->verify_user();
        $this->resources->load_defaults('CMS');
        $this->resources->add_css('assets/css/global-cms.css');
        $this->load->view($layout);
    }
}