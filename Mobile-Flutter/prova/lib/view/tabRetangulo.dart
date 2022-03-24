import 'package:flutter/material.dart';
import 'package:prova/model/retangulo.dart';


class tabRetangulo extends StatefulWidget {
  tabRetangulo({Key key, this.title}) : super(key: key);


  final String title;

  @override
  _tabRetangulo createState() => _tabRetangulo();
}

class _tabRetangulo extends State<tabRetangulo> {

  GlobalKey<FormState> _formKey = new GlobalKey<FormState>();
  TextEditingController _larguraController = new TextEditingController();
  TextEditingController _alturaController = new TextEditingController();

  _rowIcon() {
    return Image.asset('images/regua.png');
  }


  _rowLargura() {
    return new TextFormField(
      controller: _larguraController,
      keyboardType: TextInputType.numberWithOptions(decimal: true),
      decoration: new InputDecoration(hintText: "Digite a largura do seu retângulo "),
      maxLength: 100,
      validator: (value) {
        if(value.isEmpty) {
          return 'Digite um número válido!!';
        }
        return null;
      },
    );
  }

  _rowAltura() {
    return new TextFormField(
      controller: _alturaController,
      keyboardType: TextInputType.numberWithOptions(decimal: true),
      decoration: new InputDecoration(hintText: "Digite a altura do seu retângulo "),
      maxLength: 100,
      validator: (value) {
        if(value.isEmpty) {
          return 'Digite um número válido!!';
        }
        return null;
      },
    );
  }

  _rowButtonRetangulo(BuildContext context) {
    return TextButton.icon(
      label: Text("Calcular"),
      icon: Icon(Icons.add),
      style: TextButton.styleFrom(
        primary: Colors.white,
        backgroundColor: Colors.blue,
        onSurface: Colors.grey,
      ),
      onPressed: (){
        _register(context);
        _resetFields();
      },
    );
  }

  _formUI(BuildContext context) {
    return Column(
      children: [
        _rowIcon(),
        _rowLargura(),
        _rowAltura(),
        _rowButtonRetangulo(context)
      ],
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

    return Column(
      children: [
        _rowForm(context)
      ],
    );
  }

  _register(BuildContext context) {
    print('Validou: ${_formKey.currentState.validate()}');

    if(_formKey.currentState.validate()) {

      final retangulo = Retangulo(
          double.tryParse(_larguraController.text),
          double.tryParse(_alturaController.text)
      );

      print('Resultado:\n ${retangulo.toString()}');

      _snackBar('Resultado:\n ${retangulo.toString()}', 10);

    } else {
      print('Digite os campos corretamente');

      _snackBar('Preencha os campos corretamente!!', 3);
    }
  }

  _resetFields() => _formKey.currentState.reset();

  _snackBar(message, seconds) {
    return ScaffoldMessenger.of(context)
        .showSnackBar(SnackBar(content: Text(message), duration: Duration(seconds: seconds),));
  }
}



