<?php
/**
 * Created by PhpStorm.
 * User: forest-sumo
 * Date: 2017/03/12
 * Time: 12:46 PM
 */


    class CMSPackages extends MY_Controller
    {
        public function __construct()
        {
            \parent::__construct();
        }

        public function index()
        {
            $this->resources->add_subview('cms/pages/packages/index');
            $this->layout_cms('Packages');
        }

        public function get_sport_packages()
        {

        }

        public function get_ski_packages()
        {

        }

        public function get_robinson_packages()
        {

        }
    }
