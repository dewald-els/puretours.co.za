<?php
/**
 * Created by PhpStorm.
 * User: forest
 * Date: 2016/10/26
 * Time: 10:42 PM
 */

namespace PT_Classes {

    /**
     * Class oPage
     * @package PT_Classes
     */
    class oPage
    {
        public $id;
        public $title;
        public $slug;
        public $keywords;
        public $description;
        public $show_header = 1;
        public $show_footer = 1;

        public function __construct($page_info)
        {
            if (count($page_info)) {
                $this->id = $page_info[0]->page_id;
                $this->title = $page_info[0]->page_title;
                $this->keywords = isset($page_info[0]->keywords) ? $page_info[0]->keywords : '';
                $this->description = isset($page_info[0]->description) ? $page_info[0]->description : '';
                $this->slug = $page_info[0]->slug;
            }
        }
    }
}