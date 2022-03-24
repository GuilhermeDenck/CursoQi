
package Model;

/**
 *
 * @author guidenck
 */
public class Aluno {
    private String nome;
    private String escola;
    private double nota1;
    private double nota2;
    private double nota3;
    private double peso1;
    private double peso2;
    private double peso3;
    
    //métodos: 
    //métodos construtor:

    public Aluno(String nome) {
        this.nome = nome;
        this.escola = "QI - Escolas";
    }

    
    
    public String getEscola() {
        return escola;
    }

    public void setEscola(String escola) {
        this.escola = escola;
    }
    
    public String getNome() {
        return nome;
    }

    public void setNome(String nome) {
        this.nome = nome;
    }

    public double getNota1() {
        return nota1;
    }

    public void setNota1(double nota1) {
        this.nota1 = nota1;
    }

    public double getNota2() {
        return nota2;
    }

    public void setNota2(double nota2) {
        this.nota2 = nota2;
    }

    public double getNota3() {
        return nota3;
    }

    public void setNota3(double nota3) {
        this.nota3 = nota3;
    }

    public double getPeso1() {
        return peso1;
    }

    public void setPeso1(double peso1) {
        this.peso1 = peso1;
    }

    public double getPeso2() {
        return peso2;
    }

    public void setPeso2(double peso2) {
        this.peso2 = peso2;
    }

    public double getPeso3() {
        return peso3;
    }

    public void setPeso3(double peso3) {
        this.peso3 = peso3;
    }

    @Override
    public String toString() {
        return "Nome: " + nome +
               "Escola: " + escola +
               "\nNota 1: " + nota1 +
               "\nNota 2: " + nota2 +
               "\nNota 3: " + nota3 +
               "\nPeso 1: " + peso1 +
               "\nPeso 2: " + peso2 +
               "\nPeso 3: " + peso3;
    }
    
    public double verMedia(){
        return (this.nota1 * this.peso1 + this.nota2 * this.peso2 + this.nota3 *this.peso3) / (this.peso1 + this.peso2 + this.peso3);
    }
}
