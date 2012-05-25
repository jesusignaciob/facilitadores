$(function() {
  $('#identificacion_cedula_pasaporte').keyup(function(key) {
    valNumero(this);
  });
  
  $('#estatus').change(function() {
    $('#estatusAreaFormacion').attr('value', this.value);
  });
});

function soloNumerico(variable) {
  var numero = parseInt(variable);
  if (isNaN(numero)) {
    return "";
  }
  return numero;
}

function valNumero(control) {
  control.value = soloNumerico(control.value);
}

function cargarFacilitadores(estado, municipio, parroquia, estatus) {
  var cedula = $('#identificacion_cedula_pasaporte').val();
  var nombre = $('#identificacion_nombre').val();
  var apellido = $('#identificacion_apellido').val();

  $(function() {
    $('#facilitadoresConsultados').load('cargarFacilitadores',{ 'cedula': cedula, 'nombre': nombre, 'apellido': apellido, 'estado': estado, 'municipio': municipio,  'parroquia': parroquia, 'estatus': estatus });
  });
}
