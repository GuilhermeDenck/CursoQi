
package Model;

import java.util.Arrays;

/**
 *
 * @author guidenck
 */
public class Aluno {
    private int[] idade;

    public Aluno() {
        this.idade = new int[20];
    }

    public int[] getIdade() {
        return idade;
    }

    public void setIdade(int[] idade) {
        this.idade = idade;
    }

    @Override
    public String toString() {
        return "Idades dos alunos: "  +Arrays.toString(idade);
    }

    public void cadastrarIdade(int i,int idade){
        this.idade[i] = idade;
    }

    public double calcularMedia(){
        double acum = 0;
        for(int i=0; i<this.idade.length; i++){
            acum = acum + this.idade[i];

        }
        return acum/this.idade.length;
    }

    public double acharMaior(){
        double maior = this.idade[0];
        for(int i=0; i<this.idade.length; i++){
            if(this.idade[i]>maior){
             maior = this.idade[i];
            }
        }
        return maior;
    }


    public int maiorDeIdade(){
        int maiorIdade = 0;
        for(int i=0; i<this.idade.length; i++){
            if(this.idade[i]>=18){
                maiorIdade++;
            }
        }
        return maiorIdade;
    }




}