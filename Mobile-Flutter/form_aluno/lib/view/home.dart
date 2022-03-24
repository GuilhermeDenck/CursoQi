import 'package:flutter/material.dart';
import 'package:flare_flutter/flare_actor.dart';
import '../model/aluno.dart';

class MyHomePage extends StatefulWidget {
  MyHomePage({Key key, this.title}) : super(key: key);

  final String title;

  @override
  _MyHomePageState createState() => _MyHomePageState();
}

class _MyHomePageState extends State<MyHomePage> {

  GlobalKey<FormState> _formKey = new GlobalKey<FormState>();
  TextEditingController _nomeController = new TextEditingController();
  TextEditingController _sobrenomeController = new TextEditingController();
  TextEditingController _nota1Controller = new TextEditingController();
  TextEditingController _nota2Controller = new TextEditingController();

  _rowIcon() {
    return Center(
      child: Container(
        child: FlareActor(
          'assets/WorldSpin.flr',
          fit:BoxFit.contain,
          animation: "roll",
        ),
        width: 200,
        height: 200  ,
      ),
    );
  }

  _rowNome() {
    return new TextFormField(
      controller: _nomeController,
      keyboardType: TextInputType.text,
      decoration: new InputDecoration(hintText: "Digite o nome do aluno "),
      maxLength: 100,
      validator: (value) {
        if(value.length < 2) {
          return 'Preencha o campo corretamente';
        }
        return null;
      },
    );
  }

  _rowSobrenome() {
    return new TextFormField(
      controller: _sobrenomeController,
      keyboardType: TextInputType.text,
      decoration: new InputDecoration(hintText: "Digite o sobrenome do aluno "),
      maxLength: 100,
      validator: (value) {
        if(value.length < 2) {
          return 'Preencha o campo corretamente';
        }
        return null;
      },
    );
  }

  _rowNota1() {
    return new TextFormField(
      controller: _nota1Controller,
      keyboardType: TextInputType.number,
      decoration: new InputDecoration(hintText: "Digite a primeira nota do aluno "),
      maxLength: 100,
      validator: (value) {
        if(value.isEmpty) {
          return 'Digite uma nota válido!!';
        }
        return null;
      },
    );
  }

  _rowNota2() {
    return new TextFormField(
      controller: _nota2Controller,
      keyboardType: TextInputType.number,
      decoration: new InputDecoration(hintText: "Digite a segunda nota do aluno "),
      maxLength: 100,
      validator: (value) {
        if(value.isEmpty) {
          return 'Digite uma nota válido!!';
        }
        return null;
      },
    );
  }



  _rowButton(BuildContext context) {
    return TextButton.icon(
      onPressed: () {
        _register(context);
        _resetFields();
      },
      label: Text('Registrar'),
      icon: Icon(Icons.add),
    );
  }

  _rowImage() {
    return Column(
      children: [
        Image.asset('images/aluno.png', width: 90 , height: 90,)
      ],
    );
  }

  _formUI(BuildContext context) {
    return Column(
      children: [
        _rowIcon(),
        _rowNome(),
        _rowSobrenome(),
        _rowNota1(),
        _rowNota2(),
        _rowButton(context),
        _rowImage()
      ],
    );
  }

  _rowForm(BuildContext context) {
    return Form(
      key: _formKey,
      autovalidateMode: AutovalidateMode.always,
      child: _formUI(context),
    );
  }

  @override
  Widget build(BuildContext context) {
    return Scaffold(
      appBar: AppBar(
        title: Text(widget.title),
      ),
      body: Center(
        child: Column(
          mainAxisAlignment: MainAxisAlignment.center,
          children: <Widget>[
            _rowForm(context),
          ],
        ),
      ),
    );
  }

  _register(BuildContext context) {
    print('Validou: ${_formKey.currentState.validate()}');

    if(_formKey.currentState.validate()) {

      final aluno = Aluno(
          _nomeController.text.toUpperCase(),
          _sobrenomeController.text.toUpperCase(),
          double.tryParse(_nota1Controller.text),
          double.tryParse(_nota2Controller.text)
      );

      print('Resultado:\n ${aluno.toString()}');
      ScaffoldMessenger.of(context).showSnackBar(
          SnackBar(content: Text('Resultado:\n ${aluno.toString()}'), duration: Duration(seconds: 12),)
      );


    } else {
      print('Digite os campos corretamente');

      ScaffoldMessenger.of(context).showSnackBar(
          SnackBar(content: Text('Digite os campos corretamente', ),)
      );
    }
  }

  _resetFields() => _formKey.currentState.reset();

}