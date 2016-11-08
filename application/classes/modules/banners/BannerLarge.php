<?php
/**
 * Created by PhpStorm.
 * User: forest-sumo
 * Date: 2016/11/08
 * Time: 1:41 PM
 */

require_once APPPATH.'classes/oModule.php';
require_once APPPATH.'interfaces/IModule.php';

/**
 * Class BannerLarge
 */
class BannerLarge extends oModule  implements IModule
{
    protected $src;

    public function __construct()
    {
        parent::__construct();
    }

    public function get_data_structure()
    {
        return json_encode(get_object_vars($this));
    }

    public function set_data($data)
    {
        $this->src = $data['src'];
    }
}