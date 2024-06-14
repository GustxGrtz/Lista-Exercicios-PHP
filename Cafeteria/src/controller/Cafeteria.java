package controller;

import java.util.ArrayList;
import java.util.List;

import models.Insumo.*;
import models.Pessoa.*;
import models.Produto.*;
import models.Venda.*;

public class Cafeteria {
    List<Produto> produtos;
    int codigoProduto;

    List<Insumo> insumos;
    int codigoInsumo = 0;

    List<Pessoa> pessoas;
    int codigoPessoa = 0;

    List<Venda> vendas;
    int codigoVendas = 0;

    public Cafeteria() {
        produtos = new ArrayList<>();
        insumos = new ArrayList<>();
        pessoas = new ArrayList<>();
        vendas = new ArrayList<>();
    }

////// ------------ PRODUTO ------------ //////

    //////// ADICIONAR PRODUTO ////////
    public List<Produto> AdicionarProduto(Produto novoProduto) throws Exception{
        int novoCodigo = codigoProduto + 1;

        if (BuscarProduto(novoProduto.getCodigoProduto()) == null) {
            novoProduto.setCodigoProduto(novoCodigo);
            codigoProduto = novoCodigo;
            produtos.add(novoProduto);
            throw new Exception(novoProduto.getNomeProduto() + ", com código: " + novoProduto.getCodigoProduto()
                    + " cadastrado com sucesso!");
        } else {
            throw new Exception("Produto já cadastrado com esse id! (" + novoProduto.getCodigoProduto() + ")");
        }
    }

    //////// LISTAR PRODUTO ////////
    public List<Produto> ListarProdutos() throws Exception{
        if (produtos.size() == 0) {
            throw new Exception("Não há produtos cadastradas!");
        }
        return produtos;
    }

    //////// REMOVER PRODUTO ////////
    public void RemoverProduto(Produto removerProduto) throws Exception{
        if (BuscarProduto(removerProduto.getCodigoProduto()) != null) {
            produtos.remove(removerProduto);
            throw new Exception(removerProduto.getNomeProduto() + ", com código: " + removerProduto.getCodigoProduto()
                    + " removido com sucesso!");
        } else {
            throw new Exception("Produto não encontrada!");
        }
    }

    //////// BUSCAR PRODUTO ////////
    public List<Produto> BuscarProduto(int idProduto) {
        for (Produto produto : produtos) {
            if (produto.getCodigoProduto() == idProduto) {
                return produtos;
            }
        }
        return null;
    }

////// ------------ INSUMO ------------ //////

////// ADICIONAR INSUMO ////////

public void AdicionarInsumo(Insumo novoInsumo) throws Exception{
    int novoCodigo = codigoInsumo + 1;

    if (BuscarInsumo(novoInsumo.getCodigoInsumo()) == null) {
        novoInsumo.setCodigoInsumo(novoCodigo);
        codigoInsumo = novoCodigo;
        insumos.add(novoInsumo);
        throw new Exception(novoInsumo.getNomeInsumo() + ", com código: " + novoInsumo.getCodigoInsumo()
                + " cadastrado com sucesso!");
    } else {
        throw new Exception("Insumo já cadastrado com esse id! (" + novoInsumo.getCodigoInsumo() + ")");
    }
}

////// LISTAR INSUMO ////////

public List<Insumo> ListarInsumos() throws Exception{
    if (insumos.size() == 0) {
        throw new Exception("Não há insumos cadastrados!");
    }
    return insumos;
}

////// REMOVER INSUMO ////////

public void RemoverInsumo(Insumo removerInsumo) throws Exception{
    if (BuscarInsumo(removerInsumo.getCodigoInsumo()) != null) {
        insumos.remove(removerInsumo);
        throw new Exception(removerInsumo.getNomeInsumo() + ", com código: " + removerInsumo.getCodigoInsumo()
                + " removido com sucesso!");
    } else {
        throw new Exception("Insumo não encontrado!");
    }
}

////// BUSCAR INSUMO ////////

public Insumo BuscarInsumo(int idInsumo) {
    for (Insumo insumo : insumos) {
        if (insumo.getCodigoInsumo() == idInsumo) {
            return insumo;
        }
    }
    return null;
}

  ////// ------------ PESSOA ------------ //////

    //////// ADICIONAR FUNCIONARIO ////////
    public void AdicionarFuncionario(Pessoa novoFuncionario) throws Exception{
        int novoCodigo = codigoPessoa + 1;

        if (BuscarFuncionarios(novoFuncionario.getIdPessoa()) == null) {
            novoFuncionario.setIdPessoa(novoCodigo);
            codigoPessoa = novoCodigo;
            pessoas.add(novoFuncionario);
            throw new Exception(novoFuncionario.getNome() + ", com código: " + novoFuncionario.getIdPessoa()
                    + " cadastrado com sucesso!");
        } else {
            throw new Exception("Funcionário já cadastrado com esse id! (" + novoFuncionario.getIdPessoa() + ")");
        }
    }

    //////// REMOVER FUNCIONARIO ////////
    public void RemoverFuncionario(Pessoa removerFuncionario) throws Exception{
        if (BuscarFuncionarios(removerFuncionario.getIdPessoa()) != null) {
            pessoas.remove(removerFuncionario);
            throw new Exception(
                    removerFuncionario.getNome() + ", com código: " + removerFuncionario.getIdPessoa()
                            + " removido com sucesso!");
        } else {
            throw new Exception("Funcionário não encontrado!");
        }
    }

    //////// LISTAR FUNCIONARIOS ////////
    public List<Funcionario> ListarFuncionarios() throws Exception {
        if (pessoas.size() == 0) {
            throw new Exception("Não há funcionarios cadastrados!");
        } else {
            List<Funcionario> funcionarios = new ArrayList<>();
            for (Pessoa pessoa : pessoas) {
                if (pessoa instanceof Funcionario) {
                    funcionarios.add((Funcionario) pessoa);
                }
            }
            return funcionarios;
        }
    }

    //////// BUSCAR FUNCIONARIO ////////
    public Funcionario BuscarFuncionarios(int idFuncionario) {
        List<Funcionario> funcionarios = new ArrayList<>();

        for (Pessoa pessoa : pessoas) {
            if (pessoa instanceof Funcionario) {
                funcionarios.add((Funcionario) pessoa);

                for (Funcionario funcionario : funcionarios) {
                    if (funcionario.getIdPessoa() == idFuncionario) {
                        return funcionario;
                    }
                }
            }
        }
        return null;
    }

    //////// ADICIONAR USUARIO ////////
    public void AdicionarUsuario(Pessoa novoUsuario) throws Exception{
        int novoCodigo = codigoPessoa + 1;

        if (BuscarUsuarios(novoUsuario.getIdPessoa()) == null) {
            novoUsuario.setIdPessoa(novoCodigo);
            codigoPessoa = novoCodigo;
            pessoas.add(novoUsuario);
            throw new Exception(novoUsuario.getNome() + ", com código: " + novoUsuario.getIdPessoa()
                    + " cadastrado com sucesso!");
        } else {
            throw new Exception("Usuario já cadastrado com esse id! (" + novoUsuario.getIdPessoa() + ")");
        }
    }

    //////// REMOVER USUARIO ////////
    public void RemoverUsuario(Pessoa removerUsuario) throws Exception{
        if (BuscarUsuarios(removerUsuario.getIdPessoa()) != null) {
            pessoas.remove(removerUsuario);
            throw new Exception(
                removerUsuario.getNome() + ", com código: " + removerUsuario.getIdPessoa()
                            + " removido com sucesso!");
        } else {
            throw new Exception("Usuário não encontrado!");
        }
    }

    //////// LISTAR USUARIOS ////////
    public List<Usuario> ListarUsuarios() throws Exception {
        if (pessoas.size() == 0) {
            throw new Exception("Não há usuarios cadastrados!");
        } else {
            List<Usuario> usuarios = new ArrayList<>();
            for (Pessoa pessoa : pessoas) {
                if (pessoa instanceof Usuario) {
                    usuarios.add((Usuario) pessoa);
                }
            }
            return usuarios;
        }
    }

    //////// BUSCAR USUARIOS ////////
    public Usuario BuscarUsuarios(int idUsuario) {
        List<Usuario> usuarios = new ArrayList<>();

        for (Pessoa pessoa : pessoas) {
            if (pessoa instanceof Usuario) {
                usuarios.add((Usuario) pessoa);

                for (Usuario usuario : usuarios) {
                    if (usuario.getIdPessoa() == idUsuario) {
                        return usuario;
                    }
                }
            }
        }
        return null;
    }

    ////// LISTAR PESSOAS (USUÁRIOS E FUNCIONÁRIOS) ////////

    // public void ListarPessoas() {
    //     if (pessoas.size() == 0) {
    //         System.out.println("Não há pessoas cadastrados!");
    //     } else {
    //         System.out.println(pessoas);
    //     }
    // }

    public List<Pessoa> ListarPessoas() throws Exception {
        if (pessoas.isEmpty()) {
            throw new Exception ("Não há pessoas cadastrados!");
        }
        return pessoas;
    }

    @Override
    public String toString() {
        return "Cafeteria [produtos=" + produtos + ", codigoProduto=" + codigoProduto + ",\n insumos=" + insumos
                + ", codigoInsumo=" + codigoInsumo + ",\n pessoas=" + pessoas + ", codigoPessoa=" + codigoPessoa
                + ", vendas=" + vendas + ", codigoVendas=" + codigoVendas + "]";
    }


////// ------------ VENDA ------------ //////

    //////// ADICIONAR VENDA ////////
    public List<Venda> adicionarVenda(Venda novaVenda) throws Exception {
        int novoCodigo = codigoVendas + 1;
    
        if (BuscarVenda(novaVenda.getIdVenda()) == null) {
            novaVenda.setIdVenda(novoCodigo);
            codigoVendas = novoCodigo;
            vendas.add(novaVenda);
            throw new Exception("venda (" + novaVenda.getIdVenda() + ") cadastrada com sucesso!");
        } else {
            throw new Exception("erroAdicionarVenda");
        }
    }

    //////// LISTAR VENDA ////////
    public List<Venda> listarVendas() throws Exception {
        if (vendas.isEmpty()) {
            throw new Exception("erroListarVenda");
        }
        return vendas;
    }

    //////// BUSCAR VENDA ////////
    public List<Venda> BuscarVenda(int idVenda){
        for (Venda venda: vendas) {
            if (venda.getIdVenda() == idVenda) {
                return vendas;
        }
    }
    return null;
    }

    //////// REMOVER VENDA ////////
    public void RemoverVenda(Venda removerVenda) throws Exception{
            if (BuscarVenda(removerVenda.getIdVenda()) != null) {
                vendas.remove(removerVenda);
                throw new Exception("venda removida");
            } else {
                throw new Exception("A venda com o ID " + removerVenda.getIdVenda() + " não foi encontrada.");
            }
        }

}