$(document).ready(function () {

  // nav
  const btnMobile = $('#btn-mobile')
  const nav = $('#nav')
  const menu = $('#menu')
  const logo = $('#logo')

  function toggleMenu() {
    $(nav).toggleClass('active')

    const active = $(nav).hasClass('active')
    let msg 

    $(btnMobile).attr('aria-expanded', active);

    if (active) {
      msg = 'Fechar menu'
    } else {
      msg = 'Abrir menu'
    }

    $(btnMobile).attr('aria-label', msg)
  }
  
  $(btnMobile).click(toggleMenu)
  $(menu).click(toggleMenu)
  $(logo).click(function () { 
    const active = $(nav).hasClass('active')

    if (active) {
      toggleMenu()
    }
  });

  $('form[name="feedbackform"]').validate({
    rules: {
      nome: {
        required: true,
        minlength: 2
      },
      email: {
        required: true,
        email: true
      },
      feedback: {
        required: true,
      }
    },
    messages: {
      nome: "Preencha corretamente!",
      email: "Preencha corretamente!",
      feedback: "Escreva algo!"
    },
    submitHandler: function(form) {
      form.reset();
    }
  })
})