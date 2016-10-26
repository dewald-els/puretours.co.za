<?php
/**
 * Created by PhpStorm.
 * User: dewaldels
 * Date: 2016/07/09
 * Time: 10:32 AM
 */
class MY_Model extends CI_Model {

    protected $table_name;
    protected $primary_key = 'id';
    protected $columns;

    public function __construct()
    {
        parent::__construct();
    }

    protected function get($id = NULL)
    {
        if (!is_null($id))
            $this->db->where(array($this->primary_key=>$id));

        $result = $this->db->get($this->table_name);
        return is_null($id) ? $result->result() : $result->row();
    }

    protected function _where($where)
    {
        $this->db->where($where);
    }
}