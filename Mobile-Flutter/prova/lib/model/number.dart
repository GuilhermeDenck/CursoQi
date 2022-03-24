import 'dart:math';

class Number {
  static int generateRandomicNumber() {
    var randomNumber = new Random();
    return randomNumber.nextInt(100);
  }
}
