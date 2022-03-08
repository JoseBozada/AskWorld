/********************************** Seleccionamos los campos a los que le asignaremos funciones para validarlos **************************************/

document.querySelector('#comentario').addEventListener('keyup', validarComentario);

/********************************** Funciones para validar campos **************************************/

function validarComentario() {
  const comentario = document.querySelector('#comentario');
  const expresion = /^[a-z A-Z 0-9 á é í ó ú Á É Í Ó Ú . _ () , ÿ\u00f1\u00d1']{4,500}$/;
  if (expresion.test(comentario.value)) {
    comentario.classList.remove('is-invalid');
    comentario.classList.add('is-valid');
    return true;
  } else {
    comentario.classList.add('is-invalid');
    comentario.classList.remove('is-valid');
    return false;
  }
}

/********************************** Impedimos que se mande el formulario si no hemos validado los campos del formulario **************************************/
(function () {
  const forms = document.querySelectorAll('.needs-validation');

  for (let form of forms) {
    form.addEventListener(
      'submit',
      function (event) {
        if (
          !form.checkValidity() ||
          !validarComentario()
        ) {
          event.preventDefault();
          event.stopPropagation();
        } else {
          form.classList.add('was-validated');
        }
      },
      false
    );
  }
})();