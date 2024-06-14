package view;

import controller.Cafeteria;
import models.Insumo.Insumo;
import models.Produto.*;
import models.Venda.Venda;

import controller.Cafeteria;

public class IFuncionalidade {

    public static void main() throws Exception {
        //menu
    }

    public static void listarVendas(Cafeteria cafeteria) throws Exception{
        try {
            System.out.println(cafeteria.listarVendas());
        } catch (Exception erroVenda) {
            System.out.println("Não há vendas registradas");
        }
    }

    public static void adicionarVenda(Venda teste, Cafeteria cafeteria) throws Exception{
        try {
            cafeteria.adicionarVenda(teste);
        } catch (Exception erroCadastrarVenda) {
            System.out.println("Já existe uma venda com este id");
        }
    }
}
