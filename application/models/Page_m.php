<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**
*
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

class oPage 
{
    public $id;
    public $title;
    public $modules;
    public $show_header = 1;
    public $show_footer = 1;

    public function __construct($page_info)
    {
        $page = $page_info[0];
        $this->id = $page->page_id;
        $this->title = $page->page_title;
        $this->modules = NULL;
    }

    public function set_modules($modules)
    {
        $this->modules = $modules;
    }
}