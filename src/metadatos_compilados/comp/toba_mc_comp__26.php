<?php

class toba_mc_comp__26
{
	static function get_metadatos()
	{
		return array (
  'molde' => 
  array (
    'proyecto' => 'comunidades',
    'molde' => '26',
    'operacion_tipo' => '10',
    'nombre' => 'Sacramentos',
    'item' => '3494',
    'carpeta_archivos' => 'sacramentos',
    'prefijo_clases' => '_sacramentos',
    'fuente' => 'comunidades',
    'clase' => 'toba_asistente_abms',
  ),
  'molde_abms' => 
  array (
    'proyecto' => 'comunidades',
    'molde' => '26',
    'tabla' => 'sacramentos',
    'gen_usa_filtro' => 0,
    'gen_separar_pantallas' => 1,
    'cuadro_eof' => NULL,
    'cuadro_id' => 'id_sacramento',
    'filtro_comprobar_parametros' => NULL,
    'cuadro_forzar_filtro' => NULL,
    'cuadro_eliminar_filas' => 0,
    'cuadro_carga_origen' => 'datos_tabla',
    'cuadro_carga_sql' => 'SELECT
	t_s.id_sacramento,
	t_s.sacramento,
	t_c.comunidad as id_comunidad_nombre
FROM
	sacramentos as t_s,
	comunidades as t_c
WHERE
		t_s.id_comunidad = t_c.id_comunidad
ORDER BY sacramento',
    'cuadro_carga_php_include' => NULL,
    'cuadro_carga_php_clase' => NULL,
    'cuadro_carga_php_metodo' => NULL,
    'datos_tabla_validacion' => NULL,
    'apdb_pre' => NULL,
  ),
  'molde_abms_fila' => 
  array (
    0 => 
    array (
      'proyecto' => 'comunidades',
      'molde' => '26',
      'fila' => '139',
      'orden' => '1',
      'columna' => 'id_sacramento',
      'etiqueta' => 'Id Sacramento',
      'en_cuadro' => 0,
      'en_form' => 0,
      'en_filtro' => 0,
      'filtro_operador' => '=',
      'cuadro_estilo' => '0',
      'cuadro_formato' => '7',
      'dt_tipo_dato' => 'E',
      'dt_largo' => NULL,
      'dt_secuencia' => 'sacramentos_id_sacramento_seq',
      'dt_pk' => 1,
      'elemento_formulario' => 'ef_editable_numero',
      'ef_desactivar_modificacion' => NULL,
      'ef_procesar_javascript' => NULL,
      'ef_obligatorio' => 0,
      'ef_carga_origen' => NULL,
      'ef_carga_sql' => NULL,
      'ef_carga_tabla' => NULL,
      'ef_carga_php_include' => NULL,
      'ef_carga_php_clase' => NULL,
      'ef_carga_php_metodo' => NULL,
      'ef_carga_col_clave' => NULL,
      'ef_carga_col_desc' => NULL,
    ),
    1 => 
    array (
      'proyecto' => 'comunidades',
      'molde' => '26',
      'fila' => '140',
      'orden' => '2',
      'columna' => 'sacramento',
      'etiqueta' => 'Sacramento',
      'en_cuadro' => 1,
      'en_form' => 1,
      'en_filtro' => 0,
      'filtro_operador' => 'ILIKE',
      'cuadro_estilo' => '4',
      'cuadro_formato' => '1',
      'dt_tipo_dato' => 'C',
      'dt_largo' => NULL,
      'dt_secuencia' => '',
      'dt_pk' => 0,
      'elemento_formulario' => 'ef_editable',
      'ef_desactivar_modificacion' => NULL,
      'ef_procesar_javascript' => NULL,
      'ef_obligatorio' => 1,
      'ef_carga_origen' => NULL,
      'ef_carga_sql' => NULL,
      'ef_carga_tabla' => NULL,
      'ef_carga_php_include' => NULL,
      'ef_carga_php_clase' => NULL,
      'ef_carga_php_metodo' => NULL,
      'ef_carga_col_clave' => NULL,
      'ef_carga_col_desc' => NULL,
    ),
    2 => 
    array (
      'proyecto' => 'comunidades',
      'molde' => '26',
      'fila' => '141',
      'orden' => '3',
      'columna' => 'id_comunidad',
      'etiqueta' => 'Id Comunidad',
      'en_cuadro' => 1,
      'en_form' => 1,
      'en_filtro' => 0,
      'filtro_operador' => '=',
      'cuadro_estilo' => '4',
      'cuadro_formato' => '1',
      'dt_tipo_dato' => 'C',
      'dt_largo' => NULL,
      'dt_secuencia' => '',
      'dt_pk' => 0,
      'elemento_formulario' => 'ef_combo',
      'ef_desactivar_modificacion' => NULL,
      'ef_procesar_javascript' => NULL,
      'ef_obligatorio' => 1,
      'ef_carga_origen' => 'datos_tabla',
      'ef_carga_sql' => 'SELECT id_comunidad, comunidad FROM comunidades ORDER BY comunidad',
      'ef_carga_tabla' => 'comunidades',
      'ef_carga_php_include' => NULL,
      'ef_carga_php_clase' => NULL,
      'ef_carga_php_metodo' => NULL,
      'ef_carga_col_clave' => 'id_comunidad',
      'ef_carga_col_desc' => 'comunidad',
    ),
  ),
);
	}

}

?>