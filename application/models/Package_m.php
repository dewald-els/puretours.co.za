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
}