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

  String _name = '';
  String _house = '';

  @override
  Widget build(BuildContext context) {
    return Scaffold(
      appBar: AppBar(
        title: Text(widget.title),
      ),
      body: Center(
        child: Column(
          mainAxisAlignment: MainAxisAlignment.center,
          children: [
            Text('Feito $_name'),
            Text('Casa escolhida para você $_house'),
            TextButton(
              onPressed: () async {
                print('Clicou');
                setState(() {
                  _name = _getName();
                });

                final URL = Uri.https('www.potterapi.com', '/v1/sortingHat');
                final myFuture = http.get(URL);

                myFuture.then((response) {
                  if(response.statusCode == 200) {
                    print('tudo ok');

                    var jsonResponse = convert.jsonDecode(response.body);
                    print(jsonResponse);
                    setState(() {
                      _house = jsonResponse;
                    });
                  } else {
                    print('deu ruim');
                  }
                });

                // print(await _sayHellow());
                // print("aguardou");
                // print(await _sayHi());

                //await _waitForMe();
                //await _waitform():

                // _waitForMe().then((_) {
                //   print ('passou no then..... acabou tudo.');
                // });

                // _waitForMe().then((_) {
                //   print ('passou no then..... acabou tudo.');
                //   }).catchError((error) {
                //   print('passou no catchError..... acabou com erro!')
                // });
                //print('uoll');

              },
              child: Text('Clique aqui para ver o nome'),
            ),
          ],
        ),
      ),
    );

  }

    String _getName() {
      return 'Guilherme';
  }

    // Future<String> _sayHellow() async {
    //   var name = 'Hellow';
    //   return name;
    // }
    //
    // Future<String> _sayHi() async {
    //   return 'Hi';
    // }
    //
    // Future _waitForMe() async {
    //   print('iniciou');
    //
    //   return Future.delayed(Duration(seconds: 5 ), () {
    //     print('finalizou');
    //
    //     setState(() {
    //       _name = 'Joao foi....';
    //     });
    //   });
    // }
}



