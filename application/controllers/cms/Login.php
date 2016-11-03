<?php

defined('BASEPATH') OR exit('No direct script access allowed');
/**
 * Created by PhpStorm.
 * User: forest-sumo
 * Date: 2016/10/27
 * Time: 8:24 AM
 */

/**
 * Class Login
 * @property CI_Encryption $encryption
 * @property CI_Session $session
 * @property User_m $user_m
 */
class Login extends MY_Controller
{
    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        $this->resources->add_subview('cms/pages/login/index');
        $this->layout_cms('Login', 'cms/_layout_bare');
    }

    public function login()
    {
        $this->load->library('session');
        $loginResult = new stdClass();
        $loginResult->message = '';
        $loginResult->success = false;
        $post = $this->get_post();

        $this->load->library('encryption');
        $this->load->model('user_m');
        $user = $this->user_m->login_user($post['username']);

        if ($this->encryption->decrypt($user->password) == $post['password']) {
            $this->session->set_userdata('user', $user);
            redirect('admin/dashboard');
        }
        else {
            $loginResult->success = false;
            $loginResult->message = 'The information you entered was incorrect. Please check your username and password';
            $this->resources->add_data('loginResult', $loginResult);
            $this->resources->add_subview('cms/pages/login/index');
            $this->layout_cms('Login', 'cms/_layout_bare');
        }
    }

    public function logout()
    {
        $this->load->library('session');
        $this->session->unset_userdata('user');
        redirect('admin/login','refresh');

    }
}