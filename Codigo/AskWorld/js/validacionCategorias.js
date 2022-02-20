/********************************** Seleccionamos los campos a los que le asignaremos funciones para validarlos **************************************/

document.querySelector('#nombreCategoria').addEventListener('keyup', validarNombre);

/********************************** Funciones para validar campos **************************************/
function validarNombre() {
  const nombre = document.querySelector('#nombreCategoria');
  const expresion = /^[a-zA-Z á é í ó ú 0-9]{4,20}$/;
  if (expresion.test(nombre.value)) {
    nombre.classList.remove('is-invalid');
    nombre.classList.add('is-valid');
    return true;
  } else {
    nombre.classList.add('is-invalid');
    nombre.classList.remove('is-valid');
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
          !validarNombre()
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