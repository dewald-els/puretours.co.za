<?php
/**
 * Created by PhpStorm.
 * User: forest-sumo
 * Date: 2016/10/30
 * Time: 5:45 PM
 */
/**
 * Class oModule
 */
class oModule {
    public $id;
    public $name;
    public $alias;
    public $data;
    public $path;
    public $fields;

    public function __construct($module = NULL)
    {
        if (!is_null($module))
        {
            $this->id = $module->module_id;
            $this->alias = $module->alias;
            $this->data = json_decode($module->module_data);
            $this->name = $module->module_name;
            $this->path = $module->module_path;
            if (isset($module->module_fields)) {
                $this->fields = $module->module_fields;
            }
        }
    }
}