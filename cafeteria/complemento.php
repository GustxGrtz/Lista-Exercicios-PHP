<?php
include_once('Connect.php');

// include_once('view-?.php');

class Complemento
{
    private $id;
    private $nome;
    private $descricao;

    public function __construct($nome = null, $descricao = null)
    {
        $this->nome = $nome;
        $this->descricao = $descricao;
    }

    public function cadastrarComplemento()
    {
        try {
            $conn = Conexao::conectar();
            $sql = $conn->prepare("INSERT INTO Complementos (nome, descricao) VALUES (:nome, :descricao)");
            $sql->bindParam(':nome', $this->nome);
            $sql->bindParam(':descricao', $this->descricao);
            $sql->execute();
        } catch (PDOException $erro) {
            echo "Cadastro falhou! " . $erro->getMessage();
        }
    }

    public function listarComplementos()
    {
        try {
            $conn = Conexao::conectar();
            $sql = $conn->prepare("SELECT * FROM Complementos");
            $sql->execute();
            $result = $sql->fetchAll(PDO::FETCH_ASSOC);
            return $result;
        } catch (PDOException $erro) {
            echo "Erro ao listar matérias! " . $erro->getMessage();
            return [];
        }
    }

    public function excluirComplemento($id)
    {
        try {
            $conn = Conexao::conectar();
            $sql = $conn->prepare("DELETE FROM Complementos WHERE id = :id");
            $sql->bindParam(':id', $id);
            $sql->execute();
        } catch (PDOException $erro) {
            echo "Erro ao excluir matéria! " . $erro->getMessage();
        }
    }

    public function editarComplemento($id, $nome, $descricao)
    {
        try {
            $conn = Conexao::conectar();
            $sql = $conn->prepare("UPDATE Complementos SET nome = :nome, descricao = :descricao WHERE id = :id");
            $sql->bindParam(':id', $id);
            $sql->bindParam(':nome', $nome);
            $sql->bindParam(':descricao', $descricao);
            $sql->execute();
        } catch (PDOException $erro) {
            echo "Erro ao editar matéria! " . $erro->getMessage();
        }
    }

    public function getComplementoById($id)
    {
        try {
            $conn = Conexao::conectar();
            $sql = $conn->prepare("SELECT id, nome, descricao FROM Complementos WHERE id = :id");
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
