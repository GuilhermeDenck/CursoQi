
package Model;
/**
 *
 * @author guidenck
 */
public class Programa {
   private String nome;
   private double vendaJaneiro;
   private double vendaFev;
   private double vendaMarco;
   //métodos:
   //método construtor:

    public Programa(String nome) {
        this.nome = nome;
        
    }
   
   
   
    public void setNome(String nome) {
        this.nome = nome;
    }

    public void setVendaJaneiro(double vendaJaneiro) {
        this.vendaJaneiro = vendaJaneiro;
    }

    public void setVendaFev(double vendaFev) {
        this.vendaFev = vendaFev;
    }

    public void setVendaMarco(double vendaMarco) {
        this.vendaMarco = vendaMarco;
    }

   @Override
    public String toString() {
        return "Nome: " + nome +
               "\nVendas de Janeiro: " + vendaJaneiro +
               "\nVendas de Fevereiro: " + vendaFev + 
               "\nVendas de Março: " + vendaMarco;
    }
   
    public double mediaVendas(){
        return (this.vendaJaneiro + this.vendaFev + this.vendaMarco) /3;
    }
    
    
   public String categoria(){
        if(this.mediaVendas() <= 1000){
            return "Péssimo Vendedor";
        }else if (this.mediaVendas() > 1000 && this.mediaVendas() < 2500){
            return "Vendedor Desmotivado";
        }else if (this.mediaVendas() > 2500 && this.mediaVendas() < 5000){
            return "Vendedor Bom";
        }else if (this.mediaVendas() > 5000 && this.mediaVendas() < 10000){
            return "Ótimo Vendedor";
        }else if (this.mediaVendas() > 10000){
            return "Excelente Vendedor – Receber prêmio";
        }else{
            return "0";
        }

   }
}




