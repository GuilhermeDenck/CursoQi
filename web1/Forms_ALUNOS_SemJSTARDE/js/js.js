//alert('oi');
//Implemantando a função alterarCores:
function alterarCores() {
  let fundo = document.getElementById('cor1').value;
  let texto = document.getElementById('cor2').value;
  //Alterando as cores:
  document.body.style.backgroundColor = fundo;
  document.body.style.color = texto;
}
function resetarCores() {
  window.location.reload();
}

//Implementando um Array - Vetor - coleção de dados:
function colecionar() {
  var frutas = ['Morango', 'Banana','Acerola','Maçã','Maracujá'];
  var primeiraFruta = frutas[0];
  var ultimaFruta = frutas[frutas.length-1];
  var totalFrutas = frutas.length;
  var todasFrutas = frutas;
  var ordenarFrutas = frutas.sort();
alert('Cadastro de Frutas: \nTotal de Frutas: ' +totalFrutas+
  '\nTodas as Frutas: '+todasFrutas+
  '\nPrimeira Fruta: '+primeiraFruta+
  '\nÚltima Fruta: '+ultimaFruta);
}

//Implementando função Escrever:
function escrever() {
  let nome = document.getElementById('nome').value;
  if(nome.length < 2) {
    document.getElementById('nome').focus();
    alert('Preencha o campo');
  } else {
    //window.document.form1.submit();
    alert(nome);
  }
}

//Função para validar o form02.html
function validar() {
  let nome;
  let cargo;
  let div;
  let erro;
  //Pegando os dados do form e página:
  nome = document.getElementById('nome').value;
  cargo = document.getElementById('cargo').value;
  div = document.getElementById('erro');
  //Verificando se os campos form preenchidos:
  if(nome.length < 2) {
    document.getElementById('nome').focus();
    erro = 'NOME';
  } else if(cargo.length < 2) {
    document.getElementById('cargo').focus();
    erro = 'CARGO';
  } else {
    erro = '';
  }
  //Mostrando o erro na caixa de div:
  if(erro == '') {
    document.getElementById('form2').submit();
  } else {
    div.innerHTML = 'Preencha o campo '+erro+
    ' corretamente.';
  }
}

//Implementando a mensagem do form02blog:
function mensagem() {
  let mensagem = document.getElementById('msg').value;
  let div = document.getElementById('caixaMensagem');
  let msg;
  //Verificando se campo foi preenchido:
  if(mensagem.length < 2) {
      document.getElementById('msg').focus();
      alert('Preencha o campo!');
  } else {
    msg = mensagem+ '<br>';
    div.innerHTML += msg;
    document.form2.msg.value = '';
    document.form2.msg.focus();
  }
}


//Implementando a função validar do form3:
function validar() {
  let nome = document.getElementById('nome').value;
  let sexo = document.form3.sexo;
  let estado = document.getElementById('estado').value;
  let alerta  = document.getElementById('erro');

  //Validando os campos:
  if(nome.length < 2) {
    alerta.innerHTML = 'Preencha o nome corretamente.';
    document.getElementById('n').style.color = 'red';
    document.getElementById('nome').focus();
    return false;
  } else if(!sexo[0].checked && !sexo[1].checked) {
    alerta.innerHTML = 'Selecione um sexo';
    document.getElementById('s').style.color = 'red';
    return false;
  } else if(estado=='vazio') {
    alerta.innerHTML = 'Selecione um estado';
    document.getElementById('e').style.color = 'red';
    return false;
  } else {
    return true;
  }
}
