import controller.Cafeteria;
import models.Insumo.Insumo;
import models.Pessoa.Funcionario;
import models.Pessoa.Pessoa;
import models.Pessoa.Usuario;
import models.Produto.*;
import models.Venda.Venda;
import view.IFuncionalidade;

public class App {
    public static void main(String[] args) throws Exception {
        Cafeteria cafeteria = new Cafeteria();

        Produto leite = new Produto("Leite Integral", 15, 8.98);

        Produto leite2 = new Produto("Leite Desnatado", 30, 12.98);

        Produto cafe = new Produto("Café Preto", 9, 4.98);

        Insumo acucar = new Insumo("Açúcar", 20, 2.50);

        Insumo agua = new Insumo("Água", 50, 1.50);

        // Pessoa funcionario1 = new Funcionario("Giorgian Arrasca", "111.222.333-44", 1440.18);

        // Pessoa usuario1 = new Usuario("Pedro Gelbisco", "314.613.645-66", "pedroviski@email.com");

        System.out.println(cafeteria);

        cafeteria.AdicionarProduto(leite);
        cafeteria.AdicionarProduto(leite2);
        cafeteria.AdicionarProduto(cafe);

        cafeteria.AdicionarProduto(cafe);

        cafeteria.RemoverProduto(cafe);

        cafeteria.AdicionarProduto(cafe);

        cafeteria.RemoverProduto(cafe);

        cafeteria.AdicionarProduto(cafe);

        cafeteria.ListarProdutos();

        //////// PARTE DA PESSOA ////////

        try {
            cafeteria.ListarPessoas();
        } catch (Exception erroListagem) {
            System.out.println("\nNão Foi Possível Listar!!!");
        }

        // cafeteria.AdicionarFuncionario(funcionario1);

        // cafeteria.AdicionarUsuario(usuario1);

        //////// PARTE DO INSUMO ////////

        // cafeteria.AdicionarInsumo(acucar);
        cafeteria.AdicionarInsumo(agua);

        cafeteria.RemoverInsumo(acucar);

        cafeteria.ListarInsumos();

        //////// PARTE DA VENDA ////////

        IFuncionalidade.listarVendas(cafeteria);
    
        try {
            System.out.println(cafeteria.listarVendas());
        } catch (Exception erroVenda) {
            System.out.println("Não há vendas registradas");
        }

        Venda teste = new Venda(cafe, agua, null , null);

        cafeteria.adicionarVenda(teste);

        IFuncionalidade.adicionarVenda(teste, cafeteria);
        
        cafeteria.RemoverVenda(teste);

        IFuncionalidade.adicionarVenda(teste, cafeteria);

        cafeteria.RemoverVenda(teste);

        IFuncionalidade.adicionarVenda(teste, cafeteria);

        cafeteria.RemoverVenda(teste);

        IFuncionalidade.adicionarVenda(teste, cafeteria);
    }
}