<?php defined('BASEPATH') OR exit('No direct script access allowed');
/**
 * Created by PhpStorm.
 * User: forest-sumo
 * Date: 2017/03/29
 * Time: 6:04 PM
 */

/**
 * Class Admin_robinson_packages

 */
class Admin_robinson_packages extends MY_Controller {
    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        $this->resources->add_data('page_title', 'Robinson packages');
        $this->resources->add_subview('cms/pages/robinson_packages/index');
        $this->layout_cms();
    }
}