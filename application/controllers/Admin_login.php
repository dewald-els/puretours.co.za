<?php
/**
 * Created by PhpStorm.
 * User: forest-sumo
 * Date: 2017/03/29
 * Time: 6:04 PM
 */

class Admin_login extends CI_Controller {
    public function __construct()
    {
        parent::__construct();
    }

    public function index() {
        //$this->session->set_userdata('user', 'hello wordl!');
        var_dump($this->session->all_userdata());
    }

    public function checker()
    {
        var_dump($this->session->all_userdata());
    }
}