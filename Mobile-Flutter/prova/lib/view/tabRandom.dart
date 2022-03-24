import 'package:flutter/material.dart';
import 'package:prova/model/number.dart';

class tabRandom extends StatefulWidget {
  tabRandom({Key key, this.title}) : super(key: key);


  final String title;

  @override
  _tabRandom createState() => _tabRandom();
}

class _tabRandom extends State<tabRandom> {

  _rowNumberIcon() {
    return Image.asset('images/numerosAleatorios.png', width: 300, height: 300,);
  }

  var _randomicNumber = 0;

  void _generateNumber() {
    setState(() {
      _randomicNumber = Number.generateRandomicNumber();
    });
  }

  _rowRandomicNumber() {
    return Center(child:
    Column(
      children: [
          Padding(
            padding: EdgeInsets.fromLTRB(0.00, 20.00, 0.00, 50.00),
            child:
            _rowNumberIcon(),

          ),
        Text('$_randomicNumber', style: TextStyle(fontSize: 40.0, color: Colors.black),),
      ],
    ),
    );
  }


  @override
  Widget build(BuildContext context) {
    return Column(
      children: [
        _rowRandomicNumber(),
        SizedBox(height: 20,),
        TextButton.icon(
          label: Text("Randomizar"),
          icon: Icon(Icons.add),
          style: TextButton.styleFrom(
            primary: Colors.white,
            backgroundColor: Colors.blue,
            onSurface: Colors.grey,
          ),
          onPressed: () {
            setState(() {
              _randomicNumber = Number.generateRandomicNumber();
            });
          },
        ),
      ],
    );
  }
}
