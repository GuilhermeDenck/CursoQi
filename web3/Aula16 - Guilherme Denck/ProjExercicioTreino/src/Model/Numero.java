
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
        return "Numero: " +  numero;
    }
    public int calcularSomatorio(){
        int acum= 0;
        int cont= 1;
        do{
            acum = acum + cont; //OU acum += cont;
            cont++; //cont = cont + 1;

        }while(cont<=this.numero);
        return acum;
    }

    public int calcularFatorial(){
        int cont = this.numero;
        int acum = 1;
        do{
            acum = acum * cont;
            cont--;
        }while(cont>=1);
        return acum;
    }

    public int contarPares(){
       int contPar = 0;
        int cont = 1; //*
        while(cont<=this.numero){ //*
            if(cont%2==0){
                contPar++;
            }
            cont++; //* 
    }
     return contPar;
    }
    public int contarImpares(){
        int contImpar = 0;
        int cont = 1; //*
        while(cont<=this.numero){ //*
            if(cont%2!=0){
                contImpar++;
            }
            cont++; //* 
    }
     return contImpar;
    }
    public String verSeEParOuImpar(){
        if(this.numero%2==0){
            return "Par";
        }else{
            return "Impar";
        }
    }
    public String VerSeONumeroEPositivoNegativoOuNulo(){
        if(this.numero>0){
            return "Positvo";
        }else if (this.numero<0){
            return "Negativo";
        }else{
            return"Nulo";
        }
    }
    public double calcularRaizQuadradaDoNumero(){
        return Math.sqrt(this.numero);
    }
    public double calcularDobroDoNumero(){
        return this.numero*2;
    }
    public int calcularTabuadaDoNumero(int cont){
      return this.numero * cont;
  
        }
 }

