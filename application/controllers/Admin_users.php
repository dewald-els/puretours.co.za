<?php defined('BASEPATH') OR exit('No direct script access allowed');
/**
 * Created by PhpStorm.
 * User: forest-sumo
 * Date: 2017/03/29
 * Time: 6:04 PM
 */

/**
 * Class Admin_users

 */
class Admin_users extends MY_Controller {
    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        $this->load->model('user_m');
        $this->resources->add_data('users', $this->user_m->get_all());
        $this->resources->add_data('page_title', 'users');
        $this->resources->add_subview('cms/pages/users/index');
        $this->layout_cms();
    }
}