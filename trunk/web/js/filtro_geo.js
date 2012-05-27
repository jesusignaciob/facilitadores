$(document).ready(function()
{
  $('#identificacion_id_estado').change(function(key)
  {
      var valor = (this.value=='' ? '*' : this.value)
      $('#td_municipio').load(
        'cargarMunicipios',
        { query: valor}, function() {
          $('#td_parroquia').html('');
	  $('#identificacion_id_municipio').change(function(key)
          {
            var valor = (this.value=='' ? '*' : this.value)
            $('#td_parroquia').load(
              'cargarParroquias',
              { query: valor}
            );
          });
        }
      );
  });
});
