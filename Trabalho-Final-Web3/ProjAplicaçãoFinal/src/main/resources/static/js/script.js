var contErro = 0;
function verificarSenha() {
    var senha = document.querySelector('#senha');
    var senha2 = document.querySelector('#senha2');
    var erro = document.querySelector('#erroSenha');

    if (senha.value !== senha2.value || senha.value === '' || senha2.value === '') {
        erro.innerHTML = 'Senha inválida!';
        contErro++;
    } else {
        erro.innerHTML = '';
        document.querySelector('#form').submit();
    }
}