/********************************** Seleccionamos los campos a los que le asignaremos funciones para validarlos **************************************/

document.querySelector('#email').addEventListener('blur', validarEmail);

/********************************** Funciones para validar campos **************************************/

function validarEmail() {
  const email = document.querySelector('#email');
  const expresion = /^[A-Za-z_0-9]{3,}@[A-Za-z]{3,}[.]{1}[A-Za-z]{2,6}$/;
  if (expresion.test(email.value)) {
    email.classList.remove('is-invalid');
    email.classList.add('is-valid');
    return true;

  } else {
    email.classList.add('is-invalid');
    email.classList.remove('is-valid');
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
          !validarEmail()
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