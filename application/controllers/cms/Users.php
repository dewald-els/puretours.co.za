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
}