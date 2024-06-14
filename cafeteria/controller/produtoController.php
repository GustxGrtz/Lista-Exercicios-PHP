<?php

    // namespace core;

    // class Controller{

    //     private $uri;
        
    //     public function __construct() {
    //         $this->uri = Uri::uri();
    //     }
    // }

require_once('Produto.php'); 

class produtoController {

    private $produtoModel; 

    public function __construct() {
        $this->produtoModel = new Produto(); 
    }

    public function listarProdutos() {
        $produtos = $this->produtoModel->listarProdutos(); 
    }

    public function cadastrarProduto($nome, $descricao) {
        $novoProduto = new Produto($nome, $descricao);
        $resultadoCadastro = $this->produtoModel->cadastrarProduto($novoProduto); 
    }

    public function editarProduto($id, $nome, $descricao) {
        $produtoAtualizado = new Produto($id, $nome, $descricao);
        // $resultadoEdicao = $this->produtoModel->editarProduto($produtoAtualizado);

    }

    public function excluirProduto($id) {
        $resultadoExclusao = $this->produtoModel->excluirProduto($id);
    }

    public function getProdutoById($id) {
        $produto = $this->produtoModel->getProdutoById($id);
    }
}

?>