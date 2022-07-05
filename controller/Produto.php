<?php
require "model/ProdutoModel.php";
require "model/CategoriaModel.php";
class Produto
{
    function __construct()
    {
        $this->model = new ProdutoModel();
        $this->categoria_model = new CategoriaModel();
    }

    function index()
    {
        $produtos = $this->model->buscarTodos();
        include "view/template/cabecalho.php";
        include "view/template/menu.php";
        include "view/produto/listagem.php";
        include "view/template/rodape.php";
    }

    function add()
    {
        $categorias = $this->categoria_model->buscarTodos();
        include "view/template/cabecalho.php";
        include "view/template/menu.php";
        include "view/produto/form.php";
        include "view/template/rodape.php";
    }

    function excluir($id)
    {
        $this->model->excluir($id);
        header('Location: ?c=categoria');
    }

    function salvar()
    {
        if (isset($_POST['categoria'])  && !empty($_POST['categoria'])) {

            if (empty($_POST['idCategoria'])) {
                $this->model->inserir($_POST['categoria']);
            } else {
                $this->model->atualizar($_POST['categoria'], $_POST['idCategoria']);
            }
            header('Location: ?c=categoria');
        } else {
            echo "Ocorreu um erro, pois o campo não foi preenchido";
        }
    }

    function editar($id)
    {
        $categorias = $this->model->buscarTodos();
        $categoria = $this->model->buscarPorId($id);
        include "view/template/cabecalho.php";
        include "view/template/menu.php";
        include "view/categoria/form.php";
        include "view/template/rodape.php";
    }
}
