<?php defined('BASEPATH') OR exit('No direct script access allowed');
/**
 * Created by PhpStorm.
 * User: forest-sumo
 * Date: 2017/03/29
 * Time: 6:04 PM
 */

/**
 * Class Admin_resorts

 */
class Admin_resorts extends MY_Controller {
    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        $this->resources->add_data('page_title', 'Resorts');
        $this->resources->add_subview('cms/pages/resorts/index');
        $this->layout_cms();
    }

}