<?php defined('BASEPATH') OR exit('No direct script access allowed');
/**
 * Created by PhpStorm.
 * User: dewaldels
 * Date: 2016/07/09
 * Time: 10:42 AM
 */
class Resources {

    public $page_title = '';
    public $header = '';
    public $footer = '';
    public $css = array();
    public $js = array();
    private $append_js = array();
    public $views = array();
    public $data = array();

    const MODULE_DIR = 'modules/';

    public function __construct() {

    }

    public function load_defaults($section = 'PUBLIC') {
        // Global CSS files
        if ($section == 'PUBLIC') {
            $this->css[] = 'assets/css/bootstrap.css';
        }
        else if ($section == 'CMS') {
            $this->css[] = 'assets/css/cms-bootstrap.css';
        }
        $this->css[] = 'assets/css/font-awesome.min.css';
        $this->css[] = 'assets/css/global.css';
        // Global JS files
        if ($section == 'CMS') {
            $this->js[] = 'assets/libs/jquery.min.js';
        }
        $this->js[] = 'assets/libs/moment.min.js';
        $this->js[] = 'assets/libs/angular.min.js';
        $this->js[] = 'assets/libs/angular-animate.min.js';
        $this->js[] = 'assets/js/app.js';


        if ($section == 'PUBLIC') {
            $this->js[] = 'assets/js/controllers.js';
        }
        else if ($section == 'CMS') {
            $this->add_css('assets/css/cms.css');
            $this->js[] = 'assets/js/cms-controllers.js';
        }
        $this->js = array_merge($this->js, $this->append_js);
    }
    
    public function add_data($key, $value)
    {
        $this->data[$key] = $value;    
    }

    public function add_header($header) {
        $this->header = $header;
    }

    public function add_js($file) {
        $this->append_js[] = $file;
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

    public function get_module($module)
    {
        $CI =& get_instance();
        $CI->load->view(Resources::MODULE_DIR . $module . "/index");
    }
}