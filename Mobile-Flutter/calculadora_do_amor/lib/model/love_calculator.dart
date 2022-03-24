import 'dart:math';

class LoveCalculator {
  String name1;
  String name2;

  LoveCalculator(this.name1, this.name2);

  String generateLovePercent() {
    var random = new Random();
    var randomNumber = random.nextInt(100);

    if (randomNumber >= 90) {
      return '${randomNumber}% Vocês são perfeitos um para o outro';
    } else if (randomNumber >= 80) {
      return '${randomNumber}% Vocês formariam um belo casal';
    } else if (randomNumber >= 60) {
      return '${randomNumber}% Até que não seria um mal casal';
    } else if (randomNumber >= 50) {
      return '${randomNumber}% é...ainda há esperança';
    } else if (randomNumber > 40) {
      return '${randomNumber}% Pse amigo....talvez não seja a sua vez';
    } else {
      return '${randomNumber}% Sem chances';
    }
    //return "You, ${name1} and ${name2} ${random.nextInt(100)}% compatible!!! ";
  }
}
