
class Cep {
  final district;
  final city;
  final address;
  final zipcode;
  final state;

  String get getDistrict => district;
  String get getCity => city;
  String get getAddress => address;
  String get getZipcode => zipcode;
  String get getState => state;

  Cep(this.district, this.city, this.address, this.zipcode, this.state);

  factory Cep.fromJson(Map<String, dynamic> json) {
    return Cep(
      json['bairro'],
      json['cidade'],
      json['logradouro'],
      json['cep'],
      json['estado']
    );
  }

  @override
  String toString() {
    return '\nBairro: $district\ncidade: $city\nEndereço: $address\nCEP:  $zipcode\nEstado: $state';
  }
}