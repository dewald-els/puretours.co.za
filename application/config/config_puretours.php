<?php defined('BASEPATH') OR exit('No direct script access allowed');
/**
 * Created by PhpStorm.
 * User: Sumo Development
 * Date: 2016/07/09
 * Time: 10:09 AM
 */

//date_default_timezone_set('Africa/Johannesburg');


$allowed_domains = array('localhost', 'demos.sumodevelopment.co.za');
if (in_array($_SERVER['HTTP_HOST'], $allowed_domains)) {
    $domain = $_SERVER['HTTP_HOST'];
    if ($domain == 'demos.sumodevelopment.co.za') {
        $domain .= '/puretours';
    }
} else {
    $domain = 'localhost';
}
if (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] != 'off') {
    $config['base_url'] = 'https://'.$domain;
}
else {
    $config['base_url'] = 'http://'.$domain;
}
