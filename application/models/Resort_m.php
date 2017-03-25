<?php
defined('BASEPATH') OR exit('No direct script access allowed');
require_once APPPATH.'classes/oResort.php';
/**
 * Created by PhpStorm.
 * User: forest-sumo
 * Date: 2017/03/19
 * Time: 2:16 PM
 */
class Resort_m extends MY_Model
{

    private $resort;
    private $resorts;

    public function __construct()
    {
        parent::__construct();
    }

    public function get_resort($id)
    {
        $query = $this->get_query_from_file('resort', 'get_resort_info.sql');
        $query = str_replace('{$resort_id}', $id, $query);
        $this->resort = new \PT_Classes\oResort($this->db->query($query)->row());
        return $this->resort;
    }

    public function get_all_resorts()
    {
        $query = $this->get_query_from_file('resort', 'get_available_resorts.sql');
        foreach ($this->db->query($query)->result() as $resort)
        {
            $this->resorts[] = new \PT_Classes\oResort($resort);
        }
        return $this->resorts;
    }


}