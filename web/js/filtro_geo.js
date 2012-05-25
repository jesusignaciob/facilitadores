function estadoChange(idEstado) {
  $(function() {
    $('#td_municipio').load('cargarMunicipios', { query: idEstado }, function() {
      $('#td_parroquia').html('');
	    $('#identificacion_id_municipio').change(function(key) {
        $('#municipio').attr('value', this.value);
        var idMunicipio = (this.value=='' ? '*' : this.value);
        municipioChange(idMunicipio);
      });
    });
  });
}

function municipioChange(idMunicipio) {
  $('#td_parroquia').load('cargarParroquias', { query: idMunicipio }, function() {
    $('#identificacion_id_municipio').change(function(key) {
      $('#parroquia').attr('value', this.value);
    });
  });
}

$(document).ready(function()
{
  $('#identificacion_id_estado').change(function(key)
  {
    $('#estado').attr('value', this.value);
    var idEstado = (this.value=='' ? '*' : this.value)
    estadoChange(idEstado);
  });
});
