
class Retangulo {

  double altura;
  double largura;


  Retangulo(this.altura, this.largura);

  double calcularArea() {
    return largura * altura;
  }

  double calcularPerimetro() {
    return (altura * 2) + (largura * 2);
  }

  @override
  String toString() {
    return 'Altura: $altura\n Largura: $largura\n Área do retângulo: ${calcularArea()}\n Perímetro do retângulo: ${calcularPerimetro()}';
  }
}