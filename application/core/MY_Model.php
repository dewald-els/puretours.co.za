<?php defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * Created by PhpStorm.
 * User: dewaldels
 * Date: 2016/07/09
 * Time: 10:32 AM
 *
 * Class MY_Model
 * @property CI_Encryption $encryption
 */
class MY_Model extends CI_Model
{

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
            $this->db->where(array($this->primary_key => $id));

        $result = $this->db->get($this->table_name);
        return is_null($id) ? $result->result() : $result->row();
    }

    protected function get_query_from_file($path, $query)
    {
        $base_path = APPPATH . "stored_procedures" . DIRECTORY_SEPARATOR;
        try {
            $query = file_get_contents($base_path . $path . DIRECTORY_SEPARATOR . $query);
            $query = str_replace('\n', ' ', $query);
            return $query;
        } catch (Exception $ex) {
            var_dump($ex->getMessage());
        }

        return false;
    }

    protected function _where($where)
    {
        $this->db->where($where);
    }


}