<?php
/**
 * Created by PhpStorm.
 * User: forest
 * Date: 2016/11/08
 * Time: 8:51 PM
 */

/**
 * Class Media
 * @property Filebrowser $filebrowser
 */
class Media extends MY_Controller
{
    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        $this->resources->add_subview('cms/pages/media/index');
        $this->layout_cms('Media library');
    }

    public function get_files()
    {
    }

}