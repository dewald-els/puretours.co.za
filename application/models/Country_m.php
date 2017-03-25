<?php
defined('BASEPATH') OR exit('No direct script access allowed');
require_once APPPATH.'classes/oCountry.php';

/**
 * Created by PhpStorm.
 * User: forest-sumo
 * Date: 2017/03/19
 * Time: 8:44 AM
 *
 * Class Country_m
 * @property \PT_Classes\oCountry $country
 */
class Country_m extends MY_Model
{
    private $countries = array();

    public function __construct()
    {
        parent::__construct();
        $this->table_name = 'package';
        $this->primary_key = 'package_id';
    }

    public function get_available_countries()
    {
        $query = $this->get_query_from_file('country', 'get_available_countries.sql');
        $result = $this->db->query($query);
        foreach ($result->result() as $country) {
            $this->countries[] = new \PT_Classes\oCountry($country);
        }
        return $this->countries;
    }
}