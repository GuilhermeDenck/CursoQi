import 'package:flutter/material.dart';
import 'package:flare_flutter/flare_actor.dart';
import 'package:prova/view/tabRandom.dart';
import 'package:prova/view/tabRetangulo.dart';


class MyHomePage extends StatefulWidget {
  MyHomePage({Key key, this.title}) : super(key: key);


  final String title;

  @override
  _MyHomePageState createState() => _MyHomePageState();
}

class _MyHomePageState extends State<MyHomePage> {




  _rowFlare() {
    return Center(
      child: Column(
        children: [
          Container(
            child: FlareActor(
              'assets/WorldSpin.flr',
              fit: BoxFit.contain,
              animation: "roll",
            ),
            width: 500,
            height: 500,
          ),
          Text('Guilherme Denck', style: TextStyle(fontSize: 25.0),),
          Text('Rafael Santini', style: TextStyle(fontSize: 25.0),),
          Text('guidenck0303@gmail.com', style: TextStyle(fontSize: 25.0),),
          Text('rafaelfarias.santini14@gmail.com',
            style: TextStyle(fontSize: 25.0),),
        ],
      ),
    );
  }

  @override
  Widget build(BuildContext context) {
    return DefaultTabController(
      length: 3,
      child: Scaffold(
        appBar: AppBar(
          title: Text('Prova Tabs'),
          bottom: TabBar(
            tabs: [
              Tab(icon: Icon(Icons.account_circle_sharp),),
              Tab(icon: Icon(Icons.all_inclusive),),
              Tab(icon: Icon(Icons.account_tree_outlined),),
            ],
          ),
        ),
        body: TabBarView(
          children: [
            _rowFlare(),
            tabRandom(),
            tabRetangulo()
          ],
        ),
      ),
    );
  }
}


