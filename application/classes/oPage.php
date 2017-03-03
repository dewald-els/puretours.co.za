<?php
/**
 * Created by PhpStorm.
 * User: forest
 * Date: 2016/10/26
 * Time: 10:42 PM
 */

/**
 * Class oPage
 */
class oPage
{
    public $id;
    public $title;
    public $slug;
    public $modules;
    public $show_header = 1;
    public $show_footer = 1;

    public function __construct($page_info)
    {
        if (count($page_info)) {
            $this->id = $page_info[0]->page_id;
            $this->title = $page_info[0]->page_title;
            $this->slug = $page_info[0]->slug;
            $this->set_modules($page_info);
        }
    }

    /**
     * Create a new Module object for each page module.
     * @param $modules
     */
    public function set_modules($modules)
    {
        foreach ($modules as $module) {
            $this->modules[$module->alias] = new oModule($module);
        }
    }
}