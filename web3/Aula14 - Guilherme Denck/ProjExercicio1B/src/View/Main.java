
package View;

import Model.Aluno;
import java.util.Scanner;

/**
 *
 * @author guidenck
 */
public class Main {
    public static void main(String[] args) {
        Scanner ler = new Scanner(System.in);
        //Pede e lê cada dado mas dentro da variável:
        System.out.println("Digite o nome do Aluno: ");
        String nome = ler.nextLine();
        //instanciamos o objeto da classe - utlilizando o método construtor
        Aluno a1 = new Aluno(nome);
        System.out.println("Digite a nota 1: ");
        a1.setNota1(ler.nextDouble());
        System.out.println("Digite o peso da nota 1: ");
        a1.setPeso1(ler.nextDouble());
        System.out.println("Digite a nota 2: ");
        a1.setNota2(ler.nextDouble());
        System.out.println("Digite o peso da nota 2: ");
        a1.setPeso2(ler.nextDouble());
        System.out.println("Digite a nota 3: ");
        a1.setNota3(ler.nextDouble());
        System.out.println("Digite o peso da nota 3: ");
        a1.setPeso3(ler.nextDouble());
        
        System.out.println("\n\nRESPOSTAS: ");
        System.out.println(a1);
        System.out.println("A média final do Aluno é: "+a1.verMedia());
    }
}
