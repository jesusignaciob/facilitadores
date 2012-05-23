function cargarFacilitadores()
{
    var cedula = $('#identificacion_cedula_pasaporte').val();
    var nombre = $('#identificacion_nombre').val();
    var apellido = $('#identificacion_apellido').val();
    var estado = $('#identificacion_id_estado option:selected').val();
    if ( !(estado.lenght > 0) )
        estado = 0;
    var municipio = 0;
    if (estado.lenght > 0)
        municipio = $('#identificacion_id_municipio option:selected').val();
    var parroquia = 0;
    if (municipio.lenght > 0)
        parroquia = $('#identificacion_id_parroquia option:selected').val();

    $(function() {
        $('#facilitadoresConsultados').load(
          'cargarFacilitadores',
          { 'cedula': cedula, 'nombre': nombre, 'apellido': apellido, 'estado': estado, 'municipio': municipio,  'parroquia': parroquia }
        );
    });
}
