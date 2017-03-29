<?php
defined('BASEPATH') OR exit('No direct script access allowed');
require_once APPPATH.'classes/oPackage.php';

/**
 * Created by PhpStorm.
 * User: forest-sumo
 * Date: 2017/03/19
 * Time: 8:44 AM
 *
 * Class Package_m
 * @property \PT_Classes\oPackage $package
 */
class Package_m extends MY_Model
{
    private $package;

    public function __construct()
    {
        parent::__construct();
        $this->table_name = 'package';
        $this->primary_key = 'package_id';
    }

    public function get_package($id)
    {
        $query = $this->get_query_from_file('package', 'get_package.sql');
        $query = str_replace('{$package_id}', $id, $query);
        $result = $this->db->query($query);
        $this->package = new \PT_Classes\oPackage($result->row());
        return $this->package;
    }

    public function get_category_packages($category_id, $start = 0, $end = 10)
    {
        $query = $this->get_query_from_file('package', 'get_category_packages.sql');
        $query = str_replace('{$category_id}', $category_id, $query);
        $query = str_replace('{$start}', $start, $query);
        $query = str_replace('{$end}', $end, $query);
        $result = $this->db->query($query);
        $packages = array();
        foreach ($result->result() as $package) {
            $packages[] = new \PT_Classes\oPackage($package);
        }
        return $packages;
    }

    public function count_category_packages($category_id) {
        $query = $this->get_query_from_file('package', 'get_category_count.sql');
        $query = str_replace('{$category_id}', $category_id, $query);
        $result = $this->db->query($query);
        $count = $result->row();
        return is_null($count->package_count) ? 0 : $count->package_count;
    }
}