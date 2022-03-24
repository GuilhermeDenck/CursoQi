
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
         System.out.println("Digite um número maior que zero: ");
         numero = ler.nextInt();
         if(numero<1){
             System.out.println("ERRO!!! Você digitou um numero menor que 1");
         }
        }while(numero<1);
         
        Numero n1 = new Numero(numero);
        
        byte menu;
        do{
            System.out.println("ESCOLHA "
                    + "\n1 - Alterar número"
                    + "\n2 - Ver número digitado"
                    + "\n3 - Ver Somatório do nº"
                    + "\n4 - Ver Se é Par Ou Ímpar"
                    + "\n5 - Ver Se é Pos - Neg ou Nulo"
                    + "\n6 - Extrair Raiz Quadrada"
                    + "\n7 - Calcular Dobro do Nº"
                    + "\n8 - Calcular Tabuada do Nº"
                    + "\n0 - Sair");
            menu=ler.nextByte();
            switch(menu){
                case 1:
                System.out.println("--EDITANDO--");
                do{
                    System.out.println("Digite um novo numero: ");
                    n1.setNumero(ler.nextInt());
                    if(n1.getNumero()<1){
                    System.out.println("ERRO!");
                   
                    }
                    }while(n1.getNumero()<1);    
                    System.out.println("Editado com SUCESSO!");
                    break;
                case 2:
                    System.out.println("--VISUALIZANDO--");
                    System.out.println(n1);
                    break;
                case 3:
                    System.out.println("--SOMATORIO--");
                    System.out.println(n1.calcularSomatorio());
                    break;
                case 4:
                    System.out.println("--Ver Se é Par Ou Ímpar--");
                    System.out.println(n1.verSeEParOuImpar());
                    break;
                case 5:
                    System.out.println("--Ver Se é Pos - Neg ou Nulo--");
                    System.out.println(n1.VerSeONumeroEPositivoNegativoOuNulo());
                    break;
                case 6:
                    System.out.println("--Extrair Raiz Quadrada--");
                    System.out.println(n1.calcularRaizQuadradaDoNumero());
                    break;
                case 7:
                    System.out.println("--Calcular Dobro do Nº--");
                    System.out.println(n1.calcularDobroDoNumero());
                    break;
                case 8:
                    for(int cont = 1;cont<=10;cont++){
                        System.out.println(n1.getNumero()+" x "+cont+"="+n1.calcularTabuadaDoNumero(cont));
                    }
                    break;
                case 0:
                    System.out.println("--Obrigado, Volte sempre!--");  
                    break;
                default:
                    System.out.println("Opção invalida.");
            }
                }while(menu!=0);
        
        
        
        
        
    }
}