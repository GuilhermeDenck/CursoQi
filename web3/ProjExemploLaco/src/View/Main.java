
package View;

import Model.Numero;
import java.util.Scanner;

/**
 *
 * @author guidenck
 */
public class Main {
     public static void main(String[] args) {
        Scanner ler = new Scanner(System.in);
        
        int numero;
        
        do{
         System.out.println("Digite um número: ");
          numero = ler.nextInt();
          if(numero<1){
              System.out.println("ERRO!! Número menor que um");
          }
        }while(numero<1);
         
         Numero n1 = new Numero(numero);
         
         int menu;
         do{
             System.out.println("\nEscolha:"
             + "\n1 - Ver número digitado"
             + "\n2 - Editar Número"
             + "\n3 - Ver Somátorio"
             + "\n4 - Ver Fatorial"
             + "\n5 - Contar Pares"
             + "\n0 - Sair");
        menu = ler.nextInt();
        switch(menu){
            case 1:
                System.out.println("--VISUALIZANDO--");
                System.out.println(n1);
                break;
            case 2:
                System.out.println("--EDITANDO--");
                do{
                System.out.println("Digite um novo número");
                n1.setNumero(ler.nextInt());
                if(n1.getNumero()<1){
                    System.out.println("ERRO!");
                }
        }while (n1.getNumero()<1);
                System.out.println("Editado com SUCESSO!!");
                break;
            case 3:
                System.out.println("--SOMÁTORIO--");
                System.out.println(n1.calcularSomatorio());
                break;
            case 4:
                System.out.println("--FATORIAL--");
                System.out.println(n1.calcularFatorial());
                break;
            case 5: 
                System.out.println("--CONTAR PARES--");
                System.out.println(n1.contarPares());
                break;
            case 0:
                System.out.println("--Obriado,volte sempre!");
                break;
            default:
                System.out.println("Opção Inválida.");
        }
                
         }while(menu!=0);
         
   
         
     }
}