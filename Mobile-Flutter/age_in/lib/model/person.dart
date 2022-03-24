
class Person {
  String name;
  String lastname;
  String email;
  int age;

  int calculateAgeInMonths(){
    return age * 12;
  }

  int calculateAgeInWeeks(){
    return age * 52;
  }

  int calculateAgeInDays(){
    return age * 365;
  }

  int calculateAgeInHours(){
    return age * 8760;
  }

  int calculateAgeInMinustes(){
    return age * 525600;
  }

  @override
  String toString() {
    return "Person $name $lastname\nEmail: $email \nIdade em Meses: ${calculateAgeInMonths()}\nIdade em Semanas: ${calculateAgeInWeeks()}\nIdade em Dias: ${calculateAgeInDays()}\nIdade em Horas: ${calculateAgeInHours()}\nIdada em Minutos: ${calculateAgeInMinustes()}";
  }
}