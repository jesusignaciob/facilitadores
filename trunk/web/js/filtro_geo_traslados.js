function estadoChange(idEstado) {
  $(function() {
    $('#td_municipio').load('cargarMunicipiosTraslados', { query: idEstado }, function() {
      $('#td_parroquia').html('');
	    $('#disponibilidad_traslado_estado_id_municipio').change(function(key) {
        $('#municipio').attr('value', this.value);
        var idMunicipio = (this.value=='' ? '*' : this.value);
        municipioChange(idMunicipio);
      });
    });
   }
function municipioChange(idMunicipio) {
  $('#td_parroquia').load('cargarParroquiasTraslados', { query: idMunicipio }, function() {
    $('#disponibilidad_traslado_estado_id_municipio').change(function(key) {
      $('#parroquia').attr('value', this.value);
    });
  });
}

$(document).ready(function()
{
  $('#disponibilidad_traslado_estado_id_estado').change(function(key)
  {
    $('#estado').attr('value', this.value);
    var idEstado = (this.value=='' ? '*' : this.value)
    estadoChange(idEstado);
  });
});

