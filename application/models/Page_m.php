<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * Import required classes
 */
require_once APPPATH.'models/classes/oPage.php';

/**
 * Class Page_m
 * @property Module_m $module_m
 */
class Page_m extends MY_Model
{
    private $page = NULL;

    public function __construct() 
    {
        parent::__construct();
        $this->table_name = 'page';
        $this->primary_key = 'page_id';
    }

    public function get_page_content($url = NULL)
    {
        $this->_where(array('slug'=>'/'.$url));
        $this->page = new oPage($this->get());
        $this->load->model('module_m');        
        $modules = $this->module_m->get_page_modules($this->page->id);
        $this->page->set_modules($modules);
        return $this->page;
    }
}
