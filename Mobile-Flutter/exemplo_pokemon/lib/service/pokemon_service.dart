import 'package:exemplo_pokemon/model/model.dart';
import '../constant.dart';
import 'dart:convert';
import 'package:http/http.dart' as http;

class PokemonService {

  Future<List<Pokemon>> fetchPokemon() async {

    var url = Uri.https(Constant.BASE_URL, Constant.POKEMON_ENDPOINT);
    final response = await http.Client().get(url);

    if(response.statusCode != 200)
      throw Exception();

    print('body: ${response.body}');
    return parsedJson(response.body);
  }

  List<Pokemon> parsedJson(final response) {
    final jsonDecoded = json.decode(response);

    List<dynamic> pokemons = jsonDecoded['results'];

    return pokemons.map((element) => Pokemon.fromJson(element)).toList();
  }
}