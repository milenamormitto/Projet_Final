<?php

require_once "config/Conexao.php";
class ProdutoModel
{
    function __construct()
    {
        $this->conexao = Conexao::getConnection();
    }

    function inserir($nome, $descricao, $preco, $marca, $foto, $idCategoria)
    {
        $sql = "INSERT INTO produto ($nome) values (?, ?, ?, ?, ?, ?)";
        $comando = $this->conexao->prepare($sql);
        $comando->bind_param("ssdssi", $nome, $descricao, $preco, $marca, $foto, $idCategoria);
        return $comando->execute();
    }

    function excluir($id)
    {
        $sql = "DELETE FROM produto WHERE idProduto = ?";
        $comando = $this->conexao->prepare($sql);
        $comando->bind_param("i", $id);
        return $comando->execute();
    }

    function atualizar($id, $nome, $descricao, $preco, $marca, $foto, $idCategoria)
    {
        $sql = "UPDATE produto SET nome = ?, descricao = ?, preco = ?, marca = ?, foto = ?, idCategoria = ? WHERE idProduto = ?";
        $comando = $this->conexao->prepare($sql);
        $comando->bind_param("ssdssii", $nome, $descricao, $preco, $marca, $foto, $idCategoria, $id);
        return $comando->execute();
    }

    function buscarTodos()
    {
        $sql = "SELECT * FROM produto";
        $comando = $this->conexao->prepare($sql);
        if ($comando->execute()) {
            $resultado = $comando->get_result();
            return $resultado->fetch_all(MYSQLI_ASSOC);
        }
        return null;
    }

    function buscarPorId($id)
    {
        $sql = "SELECT * FROM produto WHERE idProduto = ?";
        $comando = $this->conexao->prepare($sql);
        $comando->bind_param("i", $id);
        if ($comando->execute()) {
            $resultado = $comando->get_result();
            return $resultado->fetch_assoc();
        }
        return null;
    }
}
