<?php
include_once('Connect.php');

class Produto
{
    private $id;
    private $nome;
    private $descricao;

    public function __construct($nome = null, $descricao = null)
    {
        $this->nome = $nome;
        $this->descricao = $descricao;
    }

    public function cadastrarProduto()
    {
        try {
            $conn = Conexao::conectar();
            $sql = $conn->prepare("INSERT INTO produtos (nome, descricao) VALUES (:nome, :descricao)");
            $sql->bindParam(':nome', $this->nome);
            $sql->bindParam(':descricao', $this->descricao);
            $sql->execute();
        } catch (PDOException $erro) {
            echo "Cadastro falhou! " . $erro->getMessage();
        }
    }

    public function listarProdutos()
    {
        try {
            $conn = Conexao::conectar();
            $sql = $conn->prepare("SELECT * FROM produtos");
            $sql->execute();
            $result = $sql->fetchAll(PDO::FETCH_ASSOC);
            return $result;
        } catch (PDOException $erro) {
            echo "Erro ao listar matérias! " . $erro->getMessage();
            return [];
        }
    }

    public function excluirProduto($id)
    {
        try {
            $conn = Conexao::conectar();
            $sql = $conn->prepare("DELETE FROM produtos WHERE id = :id");
            $sql->bindParam(':id', $id);
            $sql->execute();
        } catch (PDOException $erro) {
            echo "Erro ao excluir matéria! " . $erro->getMessage();
        }
    }

    public function editarProduto($id, $nome, $descricao)
    {
        try {
            $conn = Conexao::conectar();
            $sql = $conn->prepare("UPDATE produtos SET nome = :nome, descricao = :descricao WHERE id = :id");
            $sql->bindParam(':id', $id);
            $sql->bindParam(':nome', $nome);
            $sql->bindParam(':descricao', $descricao);
            $sql->execute();
        } catch (PDOException $erro) {
            echo "Erro ao editar matéria! " . $erro->getMessage();
        }
    }

    public function getProdutoById($id)
    {
        try {
            $conn = Conexao::conectar();
            $sql = $conn->prepare("SELECT id, nome, descricao FROM Produtos WHERE id = :id");
            $sql->bindParam(':id', $id);
            $sql->execute();
            $result = $sql->fetch(PDO::FETCH_ASSOC);
            return $result;
        } catch (PDOException $erro) {
            echo "Erro ao buscar matéria! " . $erro->getMessage();
            return null;
        }
    }

    public function getNome()
    {
        return $this->nome;
    }

    public function setNome($nome)
    {
        $this->nome = $nome;
    }

    public function getDescricao()
    {
        return $this->descricao;
    }

    public function setDescricao($descricao)
    {
        $this->descricao = $descricao;
    }

    public function getId()
    {
        return $this->id;
    }

    public function setId($id)
    {
        $this->id = $id;
    }
}
