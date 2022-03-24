import 'dart:convert';

import 'package:ex_imagens/constant.dart';
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

        primarySwatch: Colors.blue,
      ),
      home: MyHomePage(),
    );
  }
}


class MyHomePage extends StatefulWidget {
  @override
  _MyHomePageState createState() => _MyHomePageState();
}

class _MyHomePageState extends State<MyHomePage> {

  final _byteImages = Base64Decoder().convert(Constant.ASSET_BASE64_LOGO);

  @override
  Widget build(BuildContext context) {
    return Scaffold(
      appBar: AppBar(title: Text('Teste imagem'),),
      body: Column(
        children: [
          Image.asset(Constant.ASSET_LOGO, width: 200, height: 200,),
          Text('Branco'),
          Image.network(Constant.ASSET_NETWORK_LOGO, width: 200, height: 200,),
          Text('Branco Web'),
          Image.memory(_byteImages),
          Text('Exemplo de imagem em base64'),
        ],
      ),
    );
  }
}

