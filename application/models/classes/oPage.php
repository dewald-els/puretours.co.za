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
        $page = $page_info[0];
        $this->id = $page->page_id;
        $this->title = $page->page_title;
        $this->modules = NULL;
    }

    public function set_modules($modules)
    {
        $this->modules = $modules;
    }
}