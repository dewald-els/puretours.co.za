<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**
 * Created by PhpStorm.
 * User: forest-sumo
 * Date: 2016/10/27
 * Time: 7:41 AM
 */

/**
 * Class Users
 * @property User_m $user_m
 * @property CI_Encryption $encryption
 */
class Users extends MY_Controller
{
    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        $this->resources->add_subview('cms/pages/users/index');
        $this->layout_cms('Users');
    }

    public function get_users()
    {
        $this->load->model('user_m');
        $users = $this->user_m->get_all();
        echo json_encode(array(
            'data' => $users
        ));
    }

    public function edit_user()
    {
        $user_id = $this->uri->segment(3);
        if (!$user_id)
        {
            redirect('admin/users');
        }
        $this->load->model('user_m');
        $user = $this->user_m->get_user($user_id);
        $this->resources->add_data('user', $user);
        $this->resources->add_subview('cms/pages/users/edit-user');
        $this->layout_cms('Edit Page');
    }

    public function show_decrypted($password)
    {
        $this->load->library('encryption');
        $encrypted_password = $this->encryption->encrypt($password);
        var_dump($encrypted_password);
    }
}