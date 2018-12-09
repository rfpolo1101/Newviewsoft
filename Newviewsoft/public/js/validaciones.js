function validarform() {
  var terminos = document.getElementById("terminos").checked;
  var nombre1 = document.getElementById("primer_nombre").value;
  var apellido = document.getElementById("primer_apellido").value;
  var apellido2 = document.getElementById("segundo_apellido").value;
  var correo = document.getElementById("correo").value;
  var correo2 = document.getElementById("correo2").value;
  var documento = document.getElementById("documento").value;
  var expresion = /\w+@\w+\.+[a-z]/;

  if (!terminos) {
    alert("No se Completo el Registro Porfavor Acepte Téminos y condiciones");
    return false;
  }

  if (documento == "") {
    alert("No se Completo el Campo del Documento");
    return false;
  }

  if (documento.length > 12) {
    alert("El Numero de Documento es Muy Largo");
    return false;
  }

  if (
    nombre1 == "" ||
    apellido1 == "" ||
    apellido2 == "" ||
    correo == "" ||
    correo2 == ""
  ) {
    alert("Por Favor Complete los Campos Obligatorios");
    return false;
  }

  if (correo != correo2) {
    alert("Las Contraseñas no Coinciden ");
    return false;
  }

  if (!expresion.test(correo)) {
    alert("Por Favor Indique un Correo Valido");
    return false;
  }
}
