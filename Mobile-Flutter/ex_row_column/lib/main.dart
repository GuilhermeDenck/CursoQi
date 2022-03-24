import 'package:flutter/material.dart';

void main() {
  runApp(MyApp());
}

class MyApp extends StatelessWidget {
  // This widget is the root of your application.
  @override
  Widget build(BuildContext context) {
    return MaterialApp(
      title: 'Flutter Row e Column',
      debugShowCheckedModeBanner: false,
      theme: ThemeData(

        primarySwatch: Colors.blue,
      ),
      home: MyHomePage(title: 'Flutter Row e Column'),
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

  double _size = 60.0;
  double _width = 60.0;
  double _height = 60.0;

  Widget _rowOne() {
    return Row(
      children: [
        Container(
          color: Colors.purple,
          width: _width,
          height: _height,
          child: FlutterLogo(size: _size),
        ),
        Container(
          color: Colors.green,
          width: _width,
          height: _height,
          child: FlutterLogo(size: _size),
        ),
      ],
    );
  }

  Widget _rowTwo() {
    return Row(
      children: [
        Container(
          color: Colors.green,
          width: _width,
          height: _height,
          child: FlutterLogo(size: _size),
        ),
        Container(
          color: Colors.green,
          width: _width,
          height: _height,
          child: FlutterLogo(size: _size),
        ),
      ],
    );
  }

  Widget _rowThreee() {
    return Row(
      children: [
        Text('aa'),
        Text('bb'),
      ],
    );
  }

  @override
  Widget build(BuildContext context) {
    return Scaffold(
        appBar: AppBar(title: Text('Flutter Row e Column'),),
        backgroundColor: Colors.white,
        body: Column(
            children: [
              Padding(
                  padding: EdgeInsets.all(10.0),
                  child: _rowOne(),
              ),
              SizedBox(
                height: 10.0,
              ),
                _rowTwo(),
              Padding(
                padding: EdgeInsets.all(10.0),
                child: _rowThreee(),
              ),
            ],
        )
    );
  }
}
//Row e Column aninhados....
// @override
// Widget build(BuildContext context) {
//   return Scaffold(
//       appBar: AppBar(title: Text('Flutter Row e Column'),),
//       backgroundColor: Colors.white,
//       body: Column(
//         children: [
//           Container(
//             color: Colors.purple,
//             width: _width,
//             height: _height,
//             child: FlutterLogo(size: _size),
//           ),
//           Container(
//             color: Colors.green,
//             width: _width,
//             height: _height,
//             child: FlutterLogo(size: _size),
//           ),
//           Row(
//             children: [
//               Container(
//                 color: Colors.orange,
//                 width: _width,
//                 height: _height,
//                 child: FlutterLogo(size: _size),
//               ),
//               Container(
//                 color: Colors.blue,
//                 width: _width,
//                 height: _height,
//                 child: FlutterLogo(size: _size),
//               ),
//               Container(
//                 color: Colors.black,
//                 width: _width,
//                 height: _height,
//                 child: FlutterLogo(size: _size),
//               )
//             ],
//           ),
//           Container(
//             color: Colors.green,
//             width: _width,
//             height: _height,
//             child: FlutterLogo(size: _size),
//           ),
//         Row(
//           children: [
//             Container(
//               color: Colors.orange,
//               width: _width,
//               height: _height,
//               child: FlutterLogo(size: _size),
//             ),
//             Container(
//               color: Colors.blue,
//               width: _width,
//               height: _height,
//               child: FlutterLogo(size: _size),
//             ),
//             Container(
//               color: Colors.black,
//               width: _width,
//               height: _height,
//               child: FlutterLogo(size: _size),
//             )
//         ],
//         ),
//         ],
//     )
//   );
// }
//}
//Row ou Column com Container MainAxisAlignment e Cross....double.infinity
//   @override
//   Widget build(BuildContext context) {
//     return Scaffold(
//         appBar: AppBar(title: Text('Flutter Row e Column'),),
//         backgroundColor: Colors.white,
//         body: Column(
//           mainAxisAlignment: MainAxisAlignment.center,
//           //crossAxisAlignment: CrossAxisAlignment.stretch,
//           children: [
//             Container(
//               color: Colors.purple,
//               width: double.infinity,
//               height: _height,
//               child: FlutterLogo(size: _size),
//             ),
//             Container(
//               color: Colors.yellow,
//               width: double.infinity,
//               height: _height,
//               child: FlutterLogo(size: _size),
//             ),
//             Container(
//               color: Colors.green,
//               width: double.infinity,
//               height: _height,
//               child: FlutterLogo(size: _size),
//             )
//           ],
//         )
//     );
//   }
// }

//Com Stack Image.network e Padding
//   @override
//   Widget build(BuildContext context) {
//     return Scaffold(
//         appBar: AppBar(title: Text('Flutter Row e Column'),),
//         backgroundColor: Colors.white,
//         body: Stack(
//           children: [
//             Image.network('https://i.pinimg.com/originals/c7/8f/9c/c78f9c888554a3633e0fcba4f8201027.png'),
//             Padding(
//               padding: EdgeInsets.fromLTRB(10.0, 5.0, 0.0, 0.0),
//               child: Text('Branco'),)
//           ],
//         )
//     );
//   }
// }

 //Com Stack align e positioned
 //  @override
 //   Widget build(BuildContext context) {
 //     return Scaffold(
 //       appBar: AppBar(title: Text('Flutter Row e Column'),),
 //       backgroundColor: Colors.white10,
 //       body: Stack(
 //         children: [
 //           Container(
 //             color: Colors.yellow,
 //             width: 300,
 //             height: 300,
 //           ),
 //           Align(
 //             alignment: Alignment.bottomLeft,
 //             child:  Container(
 //               color: Colors.green,
 //               width: 200,
 //               height: 200,
 //             ),
 //           ),
 //           Positioned(
 //             right: 40.0,
 //             top: 40.0,
 //             child:  Container(
 //               color: Colors.orange,
 //               width: 100,
 //               height: 100,
 //             ),
 //           ),
 //         ],
 //       )
 //     );
 //   }
 // }



//Exemplo com -> Row, Container e Expanded flex
//   @override
//   Widget build(BuildContext context) {
//     return Scaffold(
//         appBar: AppBar(title: Text('Flutter Row e Column'),),
//         backgroundColor: Colors.white10,
//         body: Row(
//           children: [
//             Expanded(
//               flex: 3,
//               child: Container(
//                 color: Colors.redAccent,
//             ),),
//             Expanded(
//               flex: 1,
//               child: Container(
//                 color: Colors.blueAccent,
//             ),),
//           ],
//         )
//     );
//   }
// }
  //Row ou Column e Expanded
//   @override
//   Widget build(BuildContext context) {
//     return Scaffold(
//         appBar: AppBar(title: Text('Flutter Row e Column'),),
//         backgroundColor: Colors.white,
//         body: Row(
//           children: [
//             Expanded(child:  Icon(Icons.home),),
//             Expanded(child:  Icon(Icons.android),),
//             Expanded(child:  Icon(Icons.check),),
//             Expanded(child:  Icon(Icons.access_time)),
//           ],
//         )
//     );
//   }
// }

//Só Column
 //  @override
 //   Widget build(BuildContext context) {
 //     return Scaffold(
 //       appBar: AppBar(title: Text('Flutter Row e Column'),),
 //       backgroundColor: Colors.white10,
 //       body: Column(
 //         children: [
 //           Icon(Icons.home),
 //           Icon(Icons.android),
 //           Icon(Icons.check),
 //           Icon(Icons.access_time)
 //         ],
 //       )
 //     );
 //   }
 // }


//Só Row
//   @override
//   Widget build(BuildContext context) {
//     return Scaffold(
//       appBar: AppBar(title: Text('Flutter Row e Column'),),
//       backgroundColor: Colors.white10,
//       body: Row(
//         children: [
//           Icon(Icons.home),
//           Icon(Icons.android),
//           Icon(Icons.check),
//           Icon(Icons.access_time)
//         ],
//       )
//     );
//   }
// }

