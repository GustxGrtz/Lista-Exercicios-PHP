<?php
include_once('Connect.php');

class Usuario
{
    private $id;
    private $nome;
    private $descricao;

    public function __construct($nome = null, $descricao = null)
    {
        $this->nome = $nome;
        $this->descricao = $descricao;
    }

    public function cadastrarUsuario()
    {
        try {
            $conn = Conexao::conectar();
            $sql = $conn->prepare("INSERT INTO Usuarios (nome, descricao) VALUES (:nome, :descricao)");
            $sql->bindParam(':nome', $this->nome);
            $sql->bindParam(':descricao', $this->descricao);
            $sql->execute();
        } catch (PDOException $erro) {
            echo "Cadastro falhou! " . $erro->getMessage();
        }
    }

    public function listarUsuarios()
    {
        try {
            $conn = Conexao::conectar();
            $sql = $conn->prepare("SELECT * FROM Usuarios");
            $sql->execute();
            $result = $sql->fetchAll(PDO::FETCH_ASSOC);
            return $result;
        } catch (PDOException $erro) {
            echo "Erro ao listar matérias! " . $erro->getMessage();
            return [];
        }
    }

    public function excluirUsuario($id)
    {
        try {
            $conn = Conexao::conectar();
            $sql = $conn->prepare("DELETE FROM Usuarios WHERE id = :id");
            $sql->bindParam(':id', $id);
            $sql->execute();
        } catch (PDOException $erro) {
            echo "Erro ao excluir matéria! " . $erro->getMessage();
        }
    }

    public function editarUsuario($id, $nome, $descricao)
    {
        try {
            $conn = Conexao::conectar();
            $sql = $conn->prepare("UPDATE Usuarios SET nome = :nome, descricao = :descricao WHERE id = :id");
            $sql->bindParam(':id', $id);
            $sql->bindParam(':nome', $nome);
            $sql->bindParam(':descricao', $descricao);
            $sql->execute();
        } catch (PDOException $erro) {
            echo "Erro ao editar matéria! " . $erro->getMessage();
        }
    }

    public function getUsuarioById($id)
    {
        try {
            $conn = Conexao::conectar();
            $sql = $conn->prepare("SELECT id, nome, descricao FROM Usuarios WHERE id = :id");
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
