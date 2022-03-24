
class Aluno{
    String nome;
    String sobrenome;
    double nota1;
    double nota2;


    Aluno(this.nome, this.sobrenome, this.nota1, this.nota2);

    double calcularMedia() {
          return (nota1 + nota2) / 2;
      }

    @override
    String toString() {
    return 'Nome do Aluno: $nome $sobrenome\n Nota 1: $nota1\n Nota 2: $nota2\n Média final do Aluno: ${calcularMedia()}';
  }
}