import 'package:flip_card/flip_card.dart';
import 'package:flutter/material.dart';

void main() {
  runApp(MyApp());
}

class MyApp extends StatelessWidget {
  @override
  Widget build(BuildContext context) {
    return MaterialApp(
      title: 'Catão Nubank',
      debugShowCheckedModeBanner: false,
      theme: ThemeData(

        primarySwatch: Colors.orange,
      ),
      home: MyHomePage(title: 'Cartão do Laranjo'),
    );
  }
}

class MyHomePage extends StatefulWidget {
  MyHomePage({Key key, this.title}) : super(key: key);


  final String title;

  @override
  _MyHomePageState createState() => _MyHomePageState();
}

class _MyHomePageState extends State<MyHomePage> {

  GlobalKey<FlipCardState> _cardKey = GlobalKey<FlipCardState>();

  _renderBackground() {
    return Container(
      decoration: BoxDecoration(
        color: Colors.white
      ),
    );
  }

  _frontCard() {
    return Container(
      decoration: BoxDecoration(
          borderRadius: BorderRadius.all(Radius.circular(20.0)),
          color: Color(0xffe96c02),
      ),
      child: Stack(
        children: [
          Expanded(
              child:Padding(
                child: Image.asset('images/laranjo.png', width: double.infinity, height: 200.0,),
                padding: EdgeInsets.only(left: 50.0,right: 10.0,top: 40.0,bottom: 10.0),
              ),
          ),
          Expanded(
            child: Padding(
              child: Image.asset('images/chip.png', width: 60.0, height: 60.0,),
              padding: EdgeInsets.only(left: 50.0,right: 10.0,top: 70.0,bottom: 10.0),
            ),
          ),
          Expanded(
              child: Padding(
                child: Image.asset('images/nfc.png', width: 25.0,),
                padding: EdgeInsets.only(left: 120.0,right: 10.0,top: 83.0,bottom: 10.0),
              ),
          ),
          Expanded(
            child: Padding(
              child: Image.asset('images/mastercard.png',width: 120.0,),
              padding: EdgeInsets.only(left: 320.0,right: 10.0,top: 10.0,bottom: 10.0),
            ),
          ),
          Expanded(
              child: Padding(
               child:Text('GUILHERME DENCK', style: TextStyle(fontSize: 25.0, color: Colors.white),),
                padding: EdgeInsets.only(left: 50.0,right: 10.0,top: 220.0,bottom: 0.0),
              )
          )
        ],
      ),
      );
  }

  _backCard() {
    var fonteStr = TextStyle(fontSize: 10.0, color:Colors.white);
    var fonteNum = TextStyle(color: Colors.white);

    return Container(
      decoration: BoxDecoration(
        borderRadius: BorderRadius.all(Radius.circular(20.0)),
        color: Color(0xffe96c02),
       ),
      child: Stack(
        children: [
          Padding(
            padding: const EdgeInsets.only(top: 35.0),
            child: Container(
              color: Colors.grey[300],
              width: double.infinity,
              height: 50.0,
            ),
          ),
          Expanded(
            child: Padding(
              child: Text('0000 0000 0000 0000', style: TextStyle(fontSize: 25.0, color: Colors.white),),
              padding: EdgeInsets.only(left: 20.0,right: 10.0,top: 200.0,bottom: 0.0),
            ),
          ),
          Align(
            alignment: Alignment.bottomLeft,
            child: Padding(
              padding: EdgeInsets.only(left: 20.0,right: 10.0,top: 0.0,bottom: 20.0),
              child: Row(
                children: [
                  Text('MEMBER \nSINCE', style: fonteStr,),
                  Text(' 00/00     ', style: fonteNum),
                  Text('VALID \nTHRU', style: fonteStr,),
                  Text(' 00/00     ', style: fonteNum),
                  Text('SECURITY \nCODE', style: fonteStr,),
                  Text(' 000', style: fonteNum),
                ],
              ),
            ),
          ),
          Expanded(
          child: Padding(
               child: Image.asset('images/cirrus.png',width: 130.0,),
               padding: EdgeInsets.only(left: 350.0,right: 10.0,top: 200.0,bottom: 10.0),
           ),
          ),
        ],
      )
      );
  }

  _renderCard(BuildContext context) {
    //card... montar...
    //back e front...
    return Card(
      elevation: 0.0,
      margin: EdgeInsets.only(left: 10.0,right: 10.0,top: 315.0,bottom: 315.0),
      child: FlipCard(
        direction: FlipDirection.HORIZONTAL,
        speed: 1000,
        onFlipDone: (status) {
         print('Status $status');
        },
        front: _frontCard(),
        back: _backCard(),
      ),
    );
  }

  @override
  Widget build(BuildContext context) {
    return Scaffold(
      appBar: AppBar(
        title: Text(widget.title),
      ),
      body: Stack(
        fit: StackFit.expand,
        children: [
          _renderBackground(),
          Column(
            crossAxisAlignment: CrossAxisAlignment.stretch,
            children: [
              Expanded(
                  child: _renderCard(context),
              )
            ],
          )
        ],
      ),
    );
  }
}