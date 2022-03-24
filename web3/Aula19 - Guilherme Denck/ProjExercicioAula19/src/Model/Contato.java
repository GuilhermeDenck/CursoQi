package Model;

/**
 *
 * @author guidenck
 */
public class Contato {
    private int codigo;
    private String nome;
    private long telefoneCelular;
    private long telefoneResidencial;
    private String email;
    //métodos:

    public Contato() {
        
    }

    public int getCodigo() {
        return codigo;
    }

    public void setCodigo(int codigo) {
        this.codigo = codigo;
    }

    public String getNome() {
        return nome;
    }

    public void setNome(String nome) {
        this.nome = nome;
    }

    public long getTelefoneCelular() {
        return telefoneCelular;
    }

    public void setTelefoneCelular(long telefoneCelular) {
        this.telefoneCelular = telefoneCelular;
    }

    public long getTelefoneResidencial() {
        return telefoneResidencial;
    }

    public void setTelefoneResidencial(long telefoneResidencial) {
        this.telefoneResidencial = telefoneResidencial;
    }

    public String getEmail() {
        return email;
    }

    public void setEmail(String email) {
        this.email = email;
    }

    @Override
    public String toString() {
        return "\n------------------" +
               "\nCódigo: " + codigo +
               "\nNome: " + nome +
               "\nTelefone Celular: " + telefoneCelular +
               "\nTelefone Residencial: " + telefoneResidencial +
               "\nE-mail: " + email;
               
    }
    
}
