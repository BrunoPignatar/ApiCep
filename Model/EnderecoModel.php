<?php

namespace ApiCep\Model;

use ApiCep\DAO\EnderecoDAO;
use Exception;

class EnderecoModel extends EnderecoModel
{
    public $id_logradouro, $tipo, $descrica0, $id_cidade,
    $uf, $complemento, $descricao_sem_numero, $descricao_cidade,
    $codigo_cidade_ibge, $descricao_bairro;

    public $arr_cidades;

    public function getLogradouroByCep(int $cep)
    {
        try
        {
            $dao = new EnderecoDAO();

            return $dao->selectByCep($cep);
        }catch(Exception $e)
        {
            throw $e;
        }
    }
}