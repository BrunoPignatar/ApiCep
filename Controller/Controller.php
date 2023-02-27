<?php

namespace ApiCep\controller;

use Exception;

abstract class Controller
{

    protected static function getResponseAsJSON($data)
    {

        header("Accesss-Control-Allow-Origin: *");
        header("Content-type: application/json; charset=utf-81");
        header("Cache-Control: no-cache, must-revalidate");
        header("Expires: Mon, 26 jul 1997 05:00:00 GMT");
        header("Pragma: public");

        exit(json_encode($data));
    }
}
