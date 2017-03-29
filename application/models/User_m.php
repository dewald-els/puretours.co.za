<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**
 * Created by PhpStorm.
 * User: forest
 * Date: 2016/10/26
 * Time: 10:38 PM
 */

/**
 * Import required classes
 */
require_once APPPATH.'classes/oUser.php';

/**
 * Class User_m
 * @property CI_Session $session
 */
class User_m extends MY_Model
{
    public function __construct()
    {
        parent::__construct();
        $this->table_name = 'user';
        $this->primary_key = 'user_id';
    }

    public function get_all()
    {
        return $this->db->get($this->table_name)->result();
    }

    public function get_user($user_id)
    {
        return $this->get($user_id);
    }

    public function login_user($username)
    {
        $this->_where(array('username'=>$username));
        $user = $this->db->get($this->table_name)->row();
        return $user;
    }

    public function match_password($entered_password, $saved_password)
    {
        $this->load->library('encryption');
        return $this->encryption->decrypt($saved_password) == $entered_password;
    }
}