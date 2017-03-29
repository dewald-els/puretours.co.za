<?php defined('BASEPATH') OR exit('No direct script access allowed');
/**
 * Created by PhpStorm.
 * User: forest-sumo
 * Date: 2017/03/29
 * Time: 6:04 PM
 */

/**
 * Class Admin_login

 */
class Admin_login extends MY_Controller {
    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {

        $this->resources->add_data('page_title', 'Login');
        $this->resources->add_subview('cms/pages/login/index');
        $this->layout_cms('cms/_layout_bare');
    }

    public function login()
    {
        $this->resources->add_data('page_title','Login');

        if ($this->input->post('login'))
        {
            $this->load->model('user_m');

            $user = $this->user_m->login_user($this->input->post('username'));

            if ($user)
            {
                if ($this->user_m->match_password($this->input->post('password'), $user->password))
                {
                    $user->password = NULL;
                    $this->session->set_userdata('user', array(
                        'username' => $user->username,
                        'email' => $user->email
                    ));
                    redirect('admin/dashboard');
                }
                else
                {
                    $this->session->set_flashdata('login_error', 'Your username or password is incorrect.');
                    $this->resources->add_subview('cms/pages/login/index');
                    $this->layout_cms('cms/_layout_bare');
                }
            }
            else // No username
            {
                $this->session->set_flashdata('login_error', 'Your username could not be found.');
                $this->resources->add_subview('cms/pages/login/index');
                $this->layout_cms('cms/_layout_bare');
            }
        }
        else
        {
            $this->resources->add_subview('cms/pages/login/index');
            $this->layout_cms('cms/_layout_bare');
        }
    }
}