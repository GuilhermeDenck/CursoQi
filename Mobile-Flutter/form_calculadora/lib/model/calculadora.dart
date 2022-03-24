
class Calculadora{
    double number1;
    double number2;

    Calculadora(this.number1, this.number2);

    double somar(){
        return number1 + number2;
      }

      double subtracao(){
        return number1 - number2;
      }

      double divisao(){
        return number1 / number2;
      }

      double multiplicacao(){
        return number1 * number2;
      }

      @override
      String toString() {
      return "Número 1: $number1\n Número 2: $number2\n Soma dos números: ${somar()}\n Subtração dos números: ${subtracao()}\n Divisão dos números: ${divisao()}\n Multiplicação dos números: ${multiplicacao()}";
      }
   }