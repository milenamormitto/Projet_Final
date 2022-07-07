<?php

require_once "model/UsuarioModel.php";

class Restrito
{

    function __construct()
    {
        $this = new UsuarioModel();
    }

    function login($id)
    {
        include "view/template/cabecalho.php";
        include "view/restrito/form.php";
        include "view/template/rodape.php";
    }

    function entrar()
    {
        if (isset($_POST['login']) && isset($_POST['senha'])) {
            $usuario = $this->usuario->buscarPorLogin($_POST['login']);
            var_dump($usuario);
        }
    }
}

    //$model->inserir("Produto de Limpeza"); //inserir dados
    //$model->excluir(1); //exclui dados
    //$model->atualizar("Smartphone", 2); //atulixa os dados
    //var_dump($model->buscarTodos()); //busca todos itens
    //var_dump($model->buscarPorId(2)); // busca algum item pelo seu ID