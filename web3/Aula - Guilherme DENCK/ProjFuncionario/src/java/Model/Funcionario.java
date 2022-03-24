/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package Model;

/**
 *
 * @author guidenck
 */
public class Funcionario {
    
    private String nome;
    private String cpf;
    private String cargo;
    private double valorHora;
    private double quantHoras;
    private double horasExtras50;
    private double horasExtras100;
    private byte dependentes;
    private byte tipoInsalubre;
    
    

    public void setNome(String nome) {
        this.nome = nome;
    }

    
    public void setCpf(String cpf) {
        this.cpf = cpf;
    }

    
    public void setCargo(String cargo) {
        this.cargo = cargo;
    }

    
    public void setValorHora(String valorHora) {
        this.valorHora = Double.parseDouble(valorHora);
    }

    
    public void setQuantHoras(String quantHoras) {
        this.quantHoras = Double.parseDouble(quantHoras);
    }

    
    public void setHorasExtras50(String horasExtras50) {
        this.horasExtras50 = Double.parseDouble(horasExtras50);
    }

    
    public void setHorasExtras100(String horasExtras100) {
        this.horasExtras100 = Double.parseDouble(horasExtras100);
    }

    
    public void setDependentes(String dependentes) {
        this.dependentes = Byte.parseByte(dependentes);
    }

    
    public void setTipoInsalubre(String tipoInsalubre) {
        this.tipoInsalubre = Byte.parseByte(tipoInsalubre);
    }

    
    public void setValeTransporte(String valeTransporte) {
        this.valeTransporte = Double.parseDouble(valeTransporte);
    }

    
    public void setValeRefeicao(String valeRefeicao) {
        this.valeRefeicao = Double.parseDouble(valeRefeicao);
    }

    
    
    @Override
    public String toString() {
        return  "\nNome: " + nome +
                "\nCPF: " + cpf +
                "\nCargo: " + cargo +
                "\nValor por hora: " + valorHora +
                "\nQuantHoras: " + quantHoras +
                "\nHoras Extras 50: " + horasExtras50 +
                "\nHoras Extras 100: " + horasExtras100 +
                "\nDependentes: " + dependentes +
                "\nTipo de Insalubridade: " + tipoInsalubre;
    }
    
    
    public double calcularSalarioBruto(){
        return this.quantHoras * this.valorHora;
    }
    
    
      double valeTransporte;    
    public double calcularValeTransporte(double valorTransporteMensal){
        double passagem = this.calcularSalarioBruto() * 0.06;
        if(passagem <= valorTransporteMensal){
            valeTransporte = passagem;
            
        } else{
            valeTransporte = 0;
        }
   return valeTransporte;   
    }
    
    
    public double calcularSalarioFamilia(){
        double salarioBruto = this.calcularSalarioBruto();
        if(salarioBruto<=907.77){
            return dependentes * 46.54;
        }else if(salarioBruto>=907.78 && salarioBruto<=1364.43){
            return dependentes * 32.80;
        }else{
            return 0;
        }
    
    }
   
    
    public double calcularInsalubridade(){
        switch  (tipoInsalubre){
            case 1:
                return 997 * 0.40;
            case 2:
                return 997 * 0.20;
            case 3:
                return 997 * 0.10;
            default:
                return 0;
        }
    }
    
    
    public double calcularINSS(){
    double salarioBruto = this.calcularSalarioBruto();
    if(salarioBruto <= 1751.81){
        salarioBruto *= 0.08;
    } else if(salarioBruto <= 2919.72){
        salarioBruto *= 0.09;
    } else if(salarioBruto <= 5839.45){
        salarioBruto *= 0.11;
    } else{
        salarioBruto *= 0.27;
    }
    return salarioBruto;
    
    }
    
    
    double valeRefeicao;
    public double calcularValeRefeicao(double valorVale){
        valeRefeicao = (25 * valorVale) * 0.20;
        return valeRefeicao;
    } 
   
    
    public double calcularValorExtra50 (){
        return (valorHora * horasExtras50) * 1.5;
        
    }
    
    
    public double calcularValorExtra100 (){
        return (valorHora * horasExtras100) * 2;
    }    
    
    
    public double calcularTotalExtra(){
        return this.calcularValorExtra50() + this.calcularValorExtra100();
    }
    
    
    public double calcularBeneficio(){
        return calcularSalarioFamilia() + calcularTotalExtra() + calcularInsalubridade();
}

    
    public double calcularDesconto(){
        return valeTransporte + valeRefeicao + calcularINSS();
}
    
    
    public double calcularLiquido(){
       return this.calcularSalarioBruto() + this.calcularTotalExtra() - this.calcularDesconto();
   }
}


