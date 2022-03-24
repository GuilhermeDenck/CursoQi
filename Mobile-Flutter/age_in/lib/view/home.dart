import 'package:flutter/cupertino.dart';
import 'package:flutter/material.dart';
import '../model/person.dart';

class MyHomePage extends StatefulWidget {
  MyHomePage({Key key, this.title}) : super(key: key);

  final String title;

  @override
  _MyHomePageState createState() => _MyHomePageState();
}

class _MyHomePageState extends State<MyHomePage> {

  void _incrementCounter() {
    setState(() {

    });
  }

  @override
  Widget build(BuildContext context) {

    return Scaffold(
      appBar: AppBar(
        title: Text(widget.title),
      ),
      body: Center(

        child: Column(
          children: [
            Expanded(
              child: Padding(
                padding: EdgeInsets.only(top: 50.0),
                child:
                Text('Bem-Vindo', style: TextStyle(fontSize: 50.0), ),
              ),
            ),
            Expanded(
              child: Row(
                  mainAxisAlignment: MainAxisAlignment.center,
                children: [
                  Flexible(
                    child: Padding(
                      padding: EdgeInsets.only(bottom: 400.0),
                      child:
                      Text('Clique no botão', style: TextStyle(fontSize: 50.0), ),
                    )
                  )
                ],
              )
            )
          ],

        ),
      ),
      floatingActionButton: FloatingActionButton(
        onPressed: (){
          print('Enviou Mensagem');
          final person = Person();
          person.name = "Guilherme";
          person.lastname = "Denck";
          person.email = "guidenck0303@gmail.com";
          person.age = 17;

          _showAlert('${person.toString()}', yesButton: 'Yes Sir/Miss');
        },
        tooltip: 'Increment',
        child: Icon(Icons.add),
      ),
    );
  }
  _showAlert(String message, {String title , String yesButton}) {
    AlertDialog alert = AlertDialog(
      title: Text (title ?? 'Person'),
      content: Text(message),
      actions: [
        TextButton(onPressed: () {
          print('Clicou no sim');
          Navigator.of(context).pop();
        }, child: Text('sim')),
        TextButton(onPressed: () {
          print('Cliclou no não');
          Navigator.of(context).pop();
        }, child: Text('não')),
      ],
    );
    showDialog(context: context, builder: (BuildContext context) {
      return alert;
    });
  }
}