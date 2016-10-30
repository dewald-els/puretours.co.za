<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * Import required classes
 */
require_once APPPATH.'models/classes/oPage.php';
require_once APPPATH.'models/classes/oModule.php';

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

    public function get_page_list()
    {
        $this->_where(array('active'=> 1));
        return $this->get();
    }

    public function get_page_content($url = NULL)
    {
        $result = $this->db->query("SELECT
                        p.page_id,
                        p.page_title,
                        m.alias,
                        m.module_id,
                        m.module_name,
                        m.module_path,
                        pm.module_data
                        FROM page p
                        LEFT JOIN page_module pm ON (pm.page_id = p.`page_id`)
                        INNER JOIN module m ON (pm.`module_id` = m.`module_id`)
                        WHERE slug = '{$url}' AND m.active = 1
                        ORDER BY pm.order");

        $page = new oPage($result->result());
        return $page;
    }

    /**
     * @param $page_id
     * @return oPage
     */
    public function get_page_detail($page_id)
    {
        $page = $this->get($page_id);
        return $page;
    }

    public function get_page_modules($page_id)
    {
        $this->load->model('module_m');
        return $this->module_m->get_page_modules($page_id);
    }
}
