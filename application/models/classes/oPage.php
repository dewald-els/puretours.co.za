<?php
/**
 * Created by PhpStorm.
 * User: forest
 * Date: 2016/10/26
 * Time: 10:42 PM
 */
class oPage
{
    public $id;
    public $title;
    public $modules;
    public $show_header = 1;
    public $show_footer = 1;

    public function __construct($page_info)
    {
        if (count($page_info)) {
            $this->id = $page_info[0]->page_id;
            $this->title = $page_info[0]->page_title;
            $this->set_modules($page_info);
        }
    }

    public function set_modules($modules)
    {
        foreach ($modules as $module)
        {
            $this->modules[$module->alias] = new oModule($module);
        }
    }
}