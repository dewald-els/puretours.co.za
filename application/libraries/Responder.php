<?php
/**
 * Created by PhpStorm.
 * User: forest-sumo
 * Date: 2017/03/09
 * Time: 10:57 PM
 */
class Responder {
    public function __construct()
    {
    }

    public function as_json($data)
    {
        header('Content-Type: application/json');
        echo json_encode($data);
    }
}