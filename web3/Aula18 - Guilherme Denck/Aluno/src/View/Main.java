
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
        
        Aluno a1 = new Aluno();
        
       byte menu;
       do{
           System.out.println("Escolha: ");
           System.out.println("1- Cadastre as idades;\n" +
                              "2- Veja as idades cadastradas;\n" +
                              "3- Veja a média de idade;\n" +
                              "4- Veja a maior idade;\n" +
                              "5- Conte quantos são maiores de idade;\n" +
                              "0- Sair");
           
           menu = ler.nextByte();
           switch(menu){
               case 1:
                   System.out.println("CADASTRANDO...");
                   for(int i=0; i<a1.getIdade().length; i++){
                       System.out.println("Digite a "+ (i+1) +"ª idade: " );
                       int idade = ler.nextInt();
                       a1.cadastrarIdade(i, idade);
                   }
                   break;
                   
               case 2:
                   System.out.println("VISUALIZANDO...");
                   System.out.println(a1);
                   
                   break;
               
               case 3:
                   System.out.println("MÉDIA DAS IDADES... ");
                   System.out.println(a1.calcularMedia());
                   
                   break;
                   
               case 4:
                   System.out.println("MAIOR IDADE CADASTRADA...");
                   System.out.println(a1.acharMaior());
                   
                   break;
                   
               case 5:
                   System.out.println("MAIORES DE IDADE...");
                   System.out.println(a1.maiorDeIdade());
                   
                   break;
                   
               case 0:
                   System.out.println("Volte Sempre !!!");
                   break;
                   
               default:
                    System.out.println("OPÇÃO INVÁLIDA.");   
               
           }
               
       }while(menu!=0); 
        
        
    }
}
