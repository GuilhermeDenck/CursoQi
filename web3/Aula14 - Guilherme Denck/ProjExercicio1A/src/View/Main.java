
package View;

import Model.Programa;
import java.util.Scanner;

/**
 *
 * @author guidenck
 */
public class Main {
    public static void main(String[] args) {
        Scanner ler = new Scanner(System.in);
        //Pede e lê cada dado mas dentro da variável:
        System.out.println("Digite o nome do Vendendor: ");
        String nome = ler.nextLine();
        //instanciamos o objeto da classe - utlilizando o método construtor
        Programa p1 = new Programa(nome);
         System.out.println("Digite o valor de vendas de janeiro: ");
        p1.setVendaJaneiro(ler.nextDouble());
        System.out.println("Digite o valor de vendas de Fevereiro: ");
        p1.setVendaFev(ler.nextDouble());
        System.out.println("Digite o valor de vendas de Março: ");
        p1.setVendaMarco(ler.nextDouble());
        
        System.out.println("\n\nRESPOSTAS: ");
        System.out.println(p1);
        System.out.println("A média de vendas do vendedor será: "+p1.mediaVendas());
        System.out.println(p1.categoria());
    }
}
