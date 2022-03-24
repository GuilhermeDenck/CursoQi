import 'package:flutter/material.dart';

void main() {
  runApp(MyApp());
}

class MyApp extends StatelessWidget {
  // This widget is the root of your application.
  @override
  Widget build(BuildContext context) {
    return MaterialApp(
      title: 'Flutter Demo',
      debugShowCheckedModeBanner: false,
      theme: ThemeData(

        primarySwatch: Colors.blueGrey,
      ),
      home: MyHomePage(title: 'Flutter Demo Home Page'),
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

  void _incrementCounter() {
    setState(() {

    });
  }

  @override
  Widget build(BuildContext context) {
    return DefaultTabController(
        length: 3,
        child: Scaffold(
          appBar: AppBar(
            title: Text('Layout com guias'),
            bottom: TabBar(
              tabs: [
                Tab(icon: Icon(Icons.add_photo_alternate),),
                Tab(icon: Icon(Icons.add_photo_alternate),),
                Tab(icon: Icon(Icons.add_photo_alternate),),
              ],
            ),
          ),
          body: TabBarView(
            children: [
              Center(child: Column(
                children: [
                  Expanded(
                      child:
                      Padding(
                        padding: EdgeInsets.fromLTRB(0.00, 20.00, 0.00, 50.00),
                        child: Column(
                         children: [
                           Image.asset('images/vayne.jpg'),
                           Text('Vayne Floresta Esperitual', style: TextStyle(fontSize: 40.0),),
                         ],
                        ),
                      ),
                  ),
                ],
              ),),
              Center(child: Column(
                children: [
                  Expanded(
                    child:
                    Padding(
                      padding: EdgeInsets.fromLTRB(20.00, 20.00, 20.00, 50.00),
                      child: Column(
                        children: [
                          Image.asset('images/lucian.jpeg'),
                          Text('Lucian Velho Oeste', style: TextStyle(fontSize: 40.0),),
                        ],
                      ),
                    ),
                  ),
                ],
              ),),
              Center(child: Column(
                children: [
                  Expanded(
                    child:
                    Padding(
                      padding: EdgeInsets.fromLTRB(20.00, 20.00, 20.00, 50.00),
                      child: Column(
                        children: [
                          Image.asset('images/tristana.jpg'),
                          Text('Tristana Treinadora De Dragões', style: TextStyle(fontSize: 35.0),),
                        ],
                      ),
                    ),
                  ),
                ],
              ),),
            ],
          ),
        ),
    );
  }
}
