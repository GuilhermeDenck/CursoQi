
package Model;

/**
 *
 * @author guidenck
 */
public class Numero {
    private int numero;

    public Numero(int numero) {
        this.numero = numero;
    }

    public int getNumero() {
        return numero;
    }

    public void setNumero(int numero) {
        this.numero = numero;
    }

    @Override
    public String toString() {
        return "Numero: " + numero;
    }
    
    public int calcularSomatorio(){
          int acum = 0;
          int cont = 1; //Variável inicializadora da contagem  - começa com 1
          while(cont<=this.numero){
              acum += cont;
              cont++;
          }
          return acum;
    }
        
    public int calcularFatorial(){
            int cont = this.numero;
            int acum = 1;
            while(cont>=1){
                acum = acum * cont;
                
                cont--;
            }
            return acum;
        }
    
    public int contarPares(){
       int contPar = 0;
        int cont = 1; 
        while(cont<=this.numero){ 
            if(cont%2==0){
                contPar++;
            }
            cont++; 
    }
     return contPar;
    }
    
    public int contarImpar(){
        int contImpar = 0;
        int cont = 1;
        while(cont<=this.numero){
            if(cont%2!=0){
               contImpar++;  
            }
             cont++;   
        }
        return contImpar;
    }
  }
    
