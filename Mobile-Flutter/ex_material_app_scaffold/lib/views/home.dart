import 'package:flutter/material.dart';

class Home extends StatefulWidget {
  @override
  _HomeState createState() => _HomeState();
}


class _HomeState extends State<Home>{

  // var _counter = 0;
  // void _incrementCounter(){
  //   setState(() {
  //     _counter = _counter + 1;
  //   });
  // }

  @override
  Widget build(BuildContext context) {
    return DefaultTabController(
      length: 2,
      child: Scaffold(
        appBar: AppBar(
          title: Text('Layout com guias'),
          bottom: TabBar(
            tabs: [
              Tab(icon: Icon(Icons.home),),
              Tab(icon: Icon(Icons.android),),
              // Text('Guia 1'),
              // Text('Guia 2'),
            ],
          ),
          ),
          body: TabBarView(
            children: [
              Center(child: Text('Primeia tab...'),),
              Center(child: Text('Segunda tab...'),),
            ],
          ),
        ),
     );
  }
}