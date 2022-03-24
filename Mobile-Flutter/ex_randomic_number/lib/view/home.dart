import 'package:flutter/material.dart';
import '../model/number.dart';

class MyHomePage extends StatefulWidget {
  MyHomePage({Key key, this.title}) : super(key: key);



  final String title;

  @override
  _MyHomePageState createState() => _MyHomePageState();
}

class _MyHomePageState extends State<MyHomePage> {

  final _number = Number();
  var _randomicNumber1;
  var _randomicNumber2;
  var _randomicNumber3;
  var _randomicNumber4;
  var _randomicNumber5;
  var _randomicNumber6;

  @override
  void initState() {
    super.initState();
    setState(() {
      _randomicNumber1 = _number.generateRandomicNumber();
      _randomicNumber2 = _number.generateRandomicNumber();
      _randomicNumber3 = _number.generateRandomicNumber();
      _randomicNumber4 = _number.generateRandomicNumber();
      _randomicNumber5 = _number.generateRandomicNumber();
      _randomicNumber6 = _number.generateRandomicNumber();
    });
  }

  @override
  Widget build(BuildContext context) {
    return Scaffold(
      appBar: AppBar(title: Text('Número randômico'),),
      body: Center(
        child: Column(
          children: [
            Expanded(
              child: Padding(
                padding: EdgeInsets.symmetric(horizontal: 20.0),
                child: Row(
                  mainAxisAlignment: MainAxisAlignment.center,
                  children: [
                    Text('$_randomicNumber1 - ', textAlign: TextAlign.center, style: TextStyle(fontSize: 45.0, ),),
                    Text('$_randomicNumber2 - ', textAlign: TextAlign.center, style: TextStyle(fontSize: 45.0, ),),
                    Text('$_randomicNumber3 - ', textAlign: TextAlign.center, style: TextStyle(fontSize: 45.0, ),),
                    Text('$_randomicNumber4 - ', textAlign: TextAlign.center, style: TextStyle(fontSize: 45.0, ),),
                    Text('$_randomicNumber5 - ', textAlign: TextAlign.center, style: TextStyle(fontSize: 45.0, ),),
                    Text('$_randomicNumber6', textAlign: TextAlign.center, style: TextStyle(fontSize: 45.0, ),),
                  ],
                ),
              ),
            )
          ],
        ),

      ),
      floatingActionButton: FloatingActionButton(
        onPressed: (){
          print('clicou');
          setState(() {
            _randomicNumber1 = _number.generateRandomicNumber();
            _randomicNumber2 = _number.generateRandomicNumber();
            _randomicNumber3 = _number.generateRandomicNumber();
            _randomicNumber4 = _number.generateRandomicNumber();
            _randomicNumber5 = _number.generateRandomicNumber();
            _randomicNumber6 = _number.generateRandomicNumber();
          });
        },
        tooltip: 'Randomic Number',
        child: Icon(Icons.add),
      ),
    );
  }
}