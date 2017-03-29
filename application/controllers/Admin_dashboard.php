<?php defined('BASEPATH') OR exit('No direct script access allowed');
/**
 * Created by PhpStorm.
 * User: forest
 * Date: 2017/03/29
 * Time: 10:48 PM
 * Class Admin_login
 */
class Admin_dashboard extends MY_Controller
{
    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        $this->resources->add_data('page_title', 'Dashboard');
        $this->resources->add_subview('cms/pages/dashboard/index');
        $this->layout_cms();
    }
}