<?php

namespace ApiCep\Controller;

use Exception;
use Stringable;

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

    protected static function getExceptionsAsJSON(Exception $e)
    {
        $exception = ['message' => $e->getMessage(),
                      'code' => $e->getCode(),
                      'file' => $e->getFile(),
                      'line' => $e-> getLine(),
                      'traceAsString' => $e-> getTraceAsString(),
                      'previous' => $e-> getPrevious()];

                      http_response_code(400);

                      header("Access-Control-Allow-Origin: *");
                      header("Content-type: application/json; charset=uft-8");
                      header("Cache-Control: no-cache, must-revalidate");
                      header("Expires: Mon, 26 jul 1997 05:00:00 GMT");
                      header("Pragma: public");

                      exit(json_encode($exception));
    }

    protected static function isGet()
    {
        if($_SERVER['REQUEST_METHOD'] !== 'GET')
           throw new Exception("O método de rrequisição deve ser GET");
    }

    protected static function isPost()
    {
        if($_SERVER['REQUEST_METHOD'] !== 'POST')
        throw new Exception("O método de requisição deve ser POST");
    }


    protected static function getIntFromUrl($var_get, $var_name = null) : int
    {
        self::isGet();

        if(!empty($var_get))
                 return (int) $var_get;
        else
           throw new Exception("Variável $var_name não identificada.");
    }


    protected static function getStringFromUrl($var_get, $var_name = null) : String
    {
        self::isGet();

        if(!empty($var_get))
        return (string) $var_get;
        else
        throw new Exception("Variável $var_name não identificada.");

    }
}
