import 'package:flutter/material.dart';
import 'package:http/http.dart' as http;
import 'dart:convert' as convert;

class MyHomePage extends StatefulWidget {
  MyHomePage({Key key, this.title}) : super(key: key);

  final String title;

  @override
  _MyHomePageState createState() => _MyHomePageState();
}

class _MyHomePageState extends State<MyHomePage> {
  var _house;

  _casa() => _house != null ? 'Casas' : '';

  _displayHouse() => _house != null ? '$_house' : '';

  _apiButton() {
    return TextButton(
      onPressed: () async {
        final url = Uri.https('www.potterapi.com', '/v1/sortingHat');
        var response = await http.get(url);

        if (response.statusCode == 200) {
          var jsonResponse = convert.jsonDecode(response.body);
          setState(() {
            _house = jsonResponse;
            _warning();
          });
        } else {
          _snackBar('Error!', 3);
        }
      },
      child: Text(
        'Randomizar Casas',
        style: TextStyle(fontSize: 20, color: Colors.white),
      ),
    );
  }

  _warning() {
    if (_house != null) {
      switch (_house) {
        case 'Gryffindor':
          {
            return 'Leão';
          }
        case 'Slytherin':
          {
            return 'Cobra';
          }
        case 'Hufflepuff':
          {
            return 'Texugo';
          }
        case 'Ravenclaw':
          {
            return 'Águia';
          }
      }
    } else {
      return 'Não há casas....';
    }
  }

  @override
  Widget build(BuildContext context) {
    var styleFont = TextStyle(fontSize: 50, color: Colors.white);

    return Scaffold(
      appBar: AppBar(
        title: Text(widget.title),
      ),
      body: Container(
        decoration: BoxDecoration(
            image: DecorationImage(
          image: AssetImage('images/fundo.jpg'),
          fit: BoxFit.cover,
        )),
        child: Center(
          child: Padding(
            padding: const EdgeInsets.symmetric(vertical: 15),
            child: Column(
              mainAxisAlignment: MainAxisAlignment.start,
              children: [
                Text(
                  '${_casa()}',
                  style: styleFont,
                ),
                Text(
                  '${_displayHouse()}',
                  style: styleFont,
                ),
                Text(
                  _warning(),
                  style: styleFont,
                ),
                _apiButton(),
              ],
            ),
          ),
        ),
      ),
    );
  }

  _snackBar(message, seconds) {
    return ScaffoldMessenger.of(context).showSnackBar(SnackBar(
      content: Text(message),
      duration: Duration(seconds: seconds),
    ));
  }
}
