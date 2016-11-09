<?php
/**
 * Created by PhpStorm.
 * User: forest
 * Date: 2016/11/08
 * Time: 8:51 PM
 */
class Media extends MY_Controller
{
    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        $this->load->helper('directory');
        $this->resources->add_data('folders', directory_map('./assets/img'));
        $this->resources->add_subview('cms/pages/media/index');
        $this->layout_cms('Media library');
    }

}