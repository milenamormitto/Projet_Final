<?php
    require "model\CategoriaModel.php";

    Class Categoria{
        function __construct(){
            $this->model = new CategoriaModel();
        }
    
        function index(){
            var_dump(($this->model->buscarTodos()));
        }
    
        function inserir(){
            echo "Testando fução Inserir";
        }
    }
    

    //$model->inserir("Produto de Limpeza"); //inserir dados
    //$model->excluir(1); //exclui dados
    //$model->atualizar("Smartphone", 2); //atulixa os dados
    //var_dump($model->buscarTodos()); //busca todos itens
    //var_dump($model->buscarPorId(2)); // busca algum item pelo seu ID