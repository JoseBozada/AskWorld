/********************************** Seleccionamos los campos a los que le asignaremos funciones para validarlos **************************************/

document.querySelector('#nombrePublicacion').addEventListener('keyup', validarNombre);

document.querySelector('#descripcionPublicacion').addEventListener('keyup', validarDescripcion);

document.querySelector('#img').addEventListener('blur', validarImagen);

/********************************** Funciones para validar campos **************************************/

function validarNombre() {
  const nombre = document.querySelector('#nombrePublicacion');
  const expresion = /^[a-zA-Z á é í ó ú ']{4,20}$/;
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

function validarDescripcion() {
  const descripcion = document.querySelector('#descripcionPublicacion');
  const expresion = /^[a-z A-Z 0-9 á é í ó ú Á É Í Ó Ú . _ () ,']{4,500}$/;
  if (expresion.test(descripcion.value)) {
    descripcion.classList.remove('is-invalid');
    descripcion.classList.add('is-valid');
    return true;
  } else {
    descripcion.classList.add('is-invalid');
    descripcion.classList.remove('is-valid');
    return false;
  }
}

function validarImagen(){
  $(document).ready(function() {
    $("#img").change(function(){
        let input = $(this);
        let extension = input.val().split(".").pop().toLowerCase();
        if( input.val() != "" ){
            if(extension != "jpg" && extension != "png" ){
                input.replaceWith(input.val('').clone(true));
                alert("imagen no permitida");
                return false;
            }
        }else{
            return true;
        }
    });
 });
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
          !validarNombre() ||
          !validarDescripcion()
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