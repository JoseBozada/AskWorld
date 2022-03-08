/********************************** Seleccionamos los campos a los que le asignaremos funciones para validarlos **************************************/
document.querySelector('#password').addEventListener('keyup', validarPassword);
/********************************** Funciones para validar campos **************************************/
function validarPassword() {
  const password = document.querySelector('#password');
  const expresion = /^(?=.{5,}$)(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9])(?=.*\W).*$/;
  if (expresion.test(password.value)) {
    password.classList.remove('is-invalid');
    password.classList.add('is-valid');
    return true;
  } else {
    password.classList.add('is-invalid');
    password.classList.remove('is-valid');
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
          !validarPassword() 
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