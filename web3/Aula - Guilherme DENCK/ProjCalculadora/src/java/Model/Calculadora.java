
package Model;

/**
 *
 * @author guidenck
 */
public class Calculadora {
    private double numero1;
    private double numero2;
    private String operacao;

    public void setNumero1(String numero1) {
        this.numero1 = Double.parseDouble(numero1);
    }

    public void setNumero2(String numero2) {
        this.numero2 = Double.parseDouble(numero2);
    }

    public void setOperacao(String operacao) {
        this.operacao = operacao;
    }
    public double calcular(){
        double   resultado = 0.0;
        switch(operacao){
            case"mais":
                resultado = numero1 + numero2;
            break;
            case"menos":
                resultado = numero1 - numero2;
            break;
            case"vezes":
                resultado = numero1 * numero2;
            break;
            case"dividir":
                resultado = numero1 / numero2;
            break;    
        }
        return resultado;
    }
    
}
