package Model;

import java.util.ArrayList;

/**
 *
 * @author guidenck
 */
public class Cadastro {
    private ArrayList<Contato>lista;
    
    public Cadastro(){
        this.lista = new ArrayList<>();
    }

    public ArrayList<Contato> getLista() {
        return lista;
    }

    public void setLista(ArrayList<Contato> lista) {
        this.lista = lista;
    }

    @Override
    public String toString() {
        return "Lista de Contatos: \n" + lista;
    }
    //Métodos CRUD:
    public void cadastro (Contato c1){
        this.lista.add(c1);
    }
    public int verQuantidade(){
        return this.lista.size();
    }
    public void excluir(Contato c1){
        this.lista.remove(c1);
    }
    
    public Contato pesquisarContato(int codigo){
        Contato achei = null;
        for(int i=0; i<this.lista.size(); i++){
        if(this.lista.get(i).getCodigo()==codigo){
            achei = this.lista.get(i);
        }   
    }
            return achei;
}
    
    public int quantidadeContato(){
       return this.lista.size();
    }
    
    public Contato pesquisarContatoPeloCell(long telefoneCelular){
        Contato achei = null;
        for(int i=0; i<this.lista.size(); i++){
            if(this.lista.get(i).getTelefoneCelular()==telefoneCelular){
                achei = this.lista.get(i);
            }
        }
        return achei;
    }
}

