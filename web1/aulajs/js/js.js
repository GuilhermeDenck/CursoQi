//Criando variáveis GLOBAIS:
var valor1
var valor2

//Função de soma:
function somarValores() {
  
  valor1 = window.prompt('Digite um valor: ')
  valor2 = window.prompt('Digite outro valor: ')
  
  valor1 = parseInt(valor1)
  valor2 = parseInt(valor2)
  
  let soma = valor1 + valor2
  
  alert(valor1+ ' + ' + valor2 + ' = ' +soma)
}

//Função da média:
function calcularMedia() {
  let media
  let resultado
  
  valor1 = window.prompt('Digite a primeira nota:')
  valor2 = window.prompt('Digite a segunda nota:')
  
  valor1 = parseInt(valor1)
  valor2 = parseInt(valor2)
  media = (valor1 + valor2) / 2

  if(media >=6 ) {
    resultado = 'Ap'
  } else {
    resultado = 'Rp'
  }

  alert('A média é: '+media+
        '\nAluno foi: '+resultado);
}

//Função de multiplicar
function calcularMultiplicacao() {
  let resultado

  valor1 = window.prompt('Digite o primeiro número:')
  valor2 = window.prompt('Digite o segundo número:')

  valor1 = parseInt(valor1)
  valor2 = parseInt(valor2)
  resultado = valor1 * valor2

  alert('A multiplicação de ' + valor1 + ' x ' + valor2 + ' = ' + resultado)
}

//Função de par ou impar
function verParOuImpar() {
  let resultado
  
  valor1 = window.prompt('Digite o número: ')

  valor1 = parseInt(valor1)

  if (valor1 % 2 == 0) {
    resultado = 'O número ' + valor1 + ' é par'
  } else {
    resultado = 'O número ' + valor1 + ' é Impar'
  }

  alert(resultado)

}

//Função Bhaskara
function bhaskara() {
  var a
  var b
  var c 

  a = parseInt(window.prompt('Informe o valor de A: '))
  b = parseInt(window.prompt('Informe o valor de B: '))
  c = parseInt(window.prompt('Informe o valor de C: '))

  var delta = b**2 - 4*a*c

  if(delta < 0) {
    delta = 'Não existe raiz de delta negativo'
  } else {
    var x1 = (-b + (Math.sqrt(delta))) / 2 * a
    var x2 = (-b - (Math.sqrt(delta))) / 2 * a
  }

  alert('Valor de delta: ' + delta + '\n' + 
        'X1 = ' + x1 + '\n' + 
        'X2 = ' + x2)
}


/*
=================
=  Calculadora  =
=================
*/

function apagarUm() {
  let numero
  numero = window.document.calcularMedia.tela.value  
  window.document.calc.tela.value = numero.substring(0, (numero.length-1))
}

function extrairRaiz() {
  
}