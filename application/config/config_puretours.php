<?php defined('BASEPATH') OR exit('No direct script access allowed');
/**
 * Created by PhpStorm.
 * User: Sumo Development
 * Date: 2016/07/09
 * Time: 10:09 AM
 */

$allowed_domains = array('localhost');
if (in_array($_SERVER['HTTP_HOST'], $allowed_domains)) {
    $domain = $_SERVER['HTTP_HOST'];
} else {
    $domain = 'localhost';
}
if (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] != 'off') {
    $config['base_url'] = 'https://'.$domain;
}
else {
    $config['base_url'] = 'http://'.$domain;
}