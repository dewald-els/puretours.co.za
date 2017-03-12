<?php
defined('BASEPATH') OR exit('No direct script access allowed');

require_once APPPATH.'classes/oModule.php';

use PT_Classes;

/**
 * Class Module_m
 */
class Module_m extends MY_Model
{
    private $page = NULL;

    public function __construct()
    {
        parent::__construct();
        $this->reset_table_info();
    }

    public function get_module($module_id)
    {
        $result = $this->get($module_id);
        $m = new PT_Classes\oModule($result);
        return $m;

    }

    private function reset_table_info()
    {
        $this->table_name = 'module';
        $this->primary_key = 'module_id';
    }

    public function get_page_modules($page_id)
    {
        $this->_where(array('page_id' => $page_id));
        $this->db->order_by('page_module.order', 'ASC');
        $this->table_name = 'page_module';
        $this->primary_key = 'page_module_id';
        $page_module_links = $this->get();
        if (count($page_module_links) == 0) {
            return [];
        }
        $module_ids = [];
        foreach ($page_module_links as $link) {
            $module_ids[] = $link->module_id;
        }

        $this->reset_table_info();
        $module_ids = implode(',', $module_ids);
        $q = $this->get_query_from_file('module', 'get_page_modules.sql');
        $q = str_replace('{$module_ids}', $module_ids, $q);
        $q = str_replace('{$primary_key}', $this->primary_key, $q);
        $modules = $this->db->query($q);
        return $modules->result();
    }


}