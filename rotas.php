<?php

use ApiCep\controller\EnderecoController;

$url = parse_url($_SERVER['REQUEST_UR1'], PHP_URL_PATH);

switch
{
case '/endereco/by-cep':
    EnderecoController::getLogradouroByCep();
    break;

    case '/logradouro/by-bairro':
    EnderecoController::getLogradouroByBairroAndCidade();
    break;

    case '/cidade/by-uf':
    EnderecoController::getCidadesByUf();
    break;

    case '/bairro/by-cidade':
    EnderecoController::getBairroByIdCidade();
    break;

    default:
    http_response_code(403);
    break;

}