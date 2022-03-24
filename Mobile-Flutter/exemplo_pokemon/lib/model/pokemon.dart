
class Pokemon{

  String name;
  String url;

  Pokemon(this.name, this.url);

  Pokemon.fromJson(Map<dynamic, dynamic> map) {
    this.name = map['name'] ?? '';
    this.url = map['url'] ?? '';
  }

  @override
  String toString() {
    return '\nName: $name\nurl: $url';
  }

}

