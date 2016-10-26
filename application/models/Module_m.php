<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Module_m extends MY_Model
{
    private $page = NULL;

    public function __construct() 
    {
        parent::__construct();
        $this->reset_table_info();
    }

    private function reset_table_info() {
        $this->table_name = 'module';
        $this->primary_key = 'module_id';
    }

    public function get_page_modules($page_id)
    {
        $this->_where(array('page_id'=>$page_id));
        $this->table_name = 'page_module';
        $this->primary_key = 'page_module_id';
        $page_module_links = $this->get();
        $module_ids = [];
        foreach ($page_module_links as $link) {
            $module_ids[] = $link->module_id;
        }
        $this->reset_table_info();
        $this->db->where_in('module_id', $module_ids);
        $modules = $this->get();
        return $modules;
    }
}