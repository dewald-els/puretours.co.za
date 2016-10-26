<?php defined('BASEPATH') OR exit('No direct script access allowed');
/**
 * Created by PhpStorm.
 * User: dewaldels
 * Date: 2016/07/09
 * Time: 10:42 AM
 */
class Resources {

    public $header = '';
    public $footer = '';
    public $css = array();
    public $js = array();
    public $views = array();
    public $data = array();

    public function __construct() {

    }

    public function load_defaults($section = 'PUBLIC') {
        // Global CSS files
        $this->css[] = 'assets/css/bootstrap.css';
        $this->css[] = 'assets/css/font-awesome.min.css';
        $this->css[] = 'assets/css/global.css';
        // Global JS files
        $this->js[] = 'assets/libs/angular.min.js';
        $this->js[] = 'assets/libs/angular-animate.min.js';
        $this->js[] = 'assets/js/app.js';
        $this->js[] = 'assets/js/controllers.js';

        if ($section == 'PUBLIC') {
            
        }
        else if ($section == 'CMS') {
            $this->add_css('assets/css/cms.css');
        }
    }
    
    public function add_data($key, $value)
    {
        $this->data[$key] = $value;    
    }

    public function add_header($header) {
        $this->header = $header;
    }

    public function add_js() {

    }

    public function add_css($css) {
        $this->css[] = $css;
    }

    public function add_subview($view) {
        $this->views[] = $view;
    }

    public function get_resources() {
        return array(
            'css' => $this->css,
            'js' => $this->js,
            'views' => $this->views,
        );
    }
}