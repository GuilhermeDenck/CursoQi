import 'package:calculadora_do_amor/model/love_calculator.dart';
import 'package:flutter/material.dart';

class MyHomePage extends StatefulWidget {
  MyHomePage({Key key, this.title}) : super(key: key);

  final String title;

  @override
  _MyHomePageState createState() => _MyHomePageState();
}

class _MyHomePageState extends State<MyHomePage> {
  GlobalKey<FormState> _formKey = new GlobalKey<FormState>();
  TextEditingController _name1 = new TextEditingController();
  TextEditingController _name2 = new TextEditingController();

  _rowImage() {
    return Image.asset(
      'images/coracao.png',
      width: 400,
      height: 400,
    );
  }

  _rowName1() {
    return new TextFormField(
      controller: _name1,
      keyboardType: TextInputType.text,
      decoration: new InputDecoration(hintText: "Digite o seu nome "),
      maxLength: 150,
      validator: (value) {
        if (value.length < 2) {
          return 'Preencha o campo corretamente';
        }
        return null;
      },
    );
  }

  _rowName2() {
    return new TextFormField(
      controller: _name2,
      keyboardType: TextInputType.text,
      decoration: new InputDecoration(hintText: "Digite o nome do seu parceiro(a)"),
      maxLength: 150,
      validator: (value) {
        if (value.length < 2) {
          return 'Preencha o campo corretamente';
        }
        return null;
      },
    );
  }

  _formUI(BuildContext context) {
    return Column(
      children: [_rowImage(), _rowName1(), _rowName2(), _rowButton(context)],
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

  _rowForm(BuildContext context) {
    return Form(
      key: _formKey,
      autovalidateMode: AutovalidateMode.onUserInteraction,
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
        child: Padding(
          padding: const EdgeInsets.symmetric(horizontal: 15),
          child: Column(
            children: [
              _rowForm(context),
            ],
          ),
        ),
      ),
    );
  }

  Future<String> _register(BuildContext context) async {
    print('Validou: ${_formKey.currentState.validate()}');

    if (_formKey.currentState.validate()) {
      final loveCalculator = LoveCalculator(_name1.text, _name2.text);
      Future.delayed(Duration(seconds: 5), () {
        print('Resultado:\n ${loveCalculator.generateLovePercent()}');
        _snackBar('Resultado:\n ${loveCalculator.generateLovePercent()}', 5);
      });
    } else {
      print('Digite os campos corretamente');
      _snackBar('Digite os campos corretamente', 3);
    }
  }


  _resetFields() => _formKey.currentState.reset();

  _snackBar(message, seconds) {
    return ScaffoldMessenger.of(context).showSnackBar(SnackBar(
      content: Text(message),
      duration: Duration(seconds: seconds),
    ));
  }
}
