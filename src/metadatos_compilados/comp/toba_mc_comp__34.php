<?php

class toba_mc_comp__34
{
	static function get_metadatos()
	{
		return array (
  'molde' => 
  array (
    'proyecto' => 'comunidades',
    'molde' => '34',
    'operacion_tipo' => '10',
    'nombre' => 'PersonaGrupo',
    'item' => '3503',
    'carpeta_archivos' => 'personagrupo',
    'prefijo_clases' => '_personagrupo',
    'fuente' => 'comunidades',
    'clase' => 'toba_asistente_abms',
  ),
  'molde_abms' => 
  array (
    'proyecto' => 'comunidades',
    'molde' => '34',
    'tabla' => 'personagrupo',
    'gen_usa_filtro' => 1,
    'gen_separar_pantallas' => 1,
    'cuadro_eof' => NULL,
    'cuadro_id' => 'id_persona,id_grupo',
    'filtro_comprobar_parametros' => 0,
    'cuadro_forzar_filtro' => 1,
    'cuadro_eliminar_filas' => NULL,
    'cuadro_carga_origen' => 'datos_tabla',
    'cuadro_carga_sql' => 'SELECT
	t_p.id_persona,
	t_p.id_grupo,
	t_c.comunidad as id_comunidad_nombre,
	t_r.responsabilidad as id_responsabilidad_nombre
FROM
	personagrupo as t_p	LEFT OUTER JOIN comunidades as t_c ON (t_p.id_comunidad = t_c.id_comunidad)
	LEFT OUTER JOIN responsabilidades as t_r ON (t_p.id_responsabilidad = t_r.id_responsabilidad)',
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
      'molde' => '34',
      'fila' => '167',
      'orden' => '1',
      'columna' => 'id_persona',
      'etiqueta' => 'Id Persona',
      'en_cuadro' => 1,
      'en_form' => 1,
      'en_filtro' => 1,
      'filtro_operador' => '=',
      'cuadro_estilo' => '4',
      'cuadro_formato' => '1',
      'dt_tipo_dato' => 'C',
      'dt_largo' => NULL,
      'dt_secuencia' => '',
      'dt_pk' => 1,
      'elemento_formulario' => 'ef_combo',
      'ef_desactivar_modificacion' => NULL,
      'ef_procesar_javascript' => NULL,
      'ef_obligatorio' => 1,
      'ef_carga_origen' => 'datos_tabla',
      'ef_carga_sql' => 'SELECT id_persona, nombres FROM personas ORDER BY nombres',
      'ef_carga_tabla' => 'personas',
      'ef_carga_php_include' => NULL,
      'ef_carga_php_clase' => NULL,
      'ef_carga_php_metodo' => NULL,
      'ef_carga_col_clave' => 'id_persona',
      'ef_carga_col_desc' => 'nombres',
    ),
    1 => 
    array (
      'proyecto' => 'comunidades',
      'molde' => '34',
      'fila' => '168',
      'orden' => '2',
      'columna' => 'id_grupo',
      'etiqueta' => 'Id Grupo',
      'en_cuadro' => 1,
      'en_form' => 1,
      'en_filtro' => 1,
      'filtro_operador' => '=',
      'cuadro_estilo' => '4',
      'cuadro_formato' => '1',
      'dt_tipo_dato' => 'C',
      'dt_largo' => NULL,
      'dt_secuencia' => '',
      'dt_pk' => 1,
      'elemento_formulario' => 'ef_combo',
      'ef_desactivar_modificacion' => NULL,
      'ef_procesar_javascript' => NULL,
      'ef_obligatorio' => 1,
      'ef_carga_origen' => 'datos_tabla',
      'ef_carga_sql' => 'SELECT id_grupo, grupo FROM grupos ORDER BY grupo',
      'ef_carga_tabla' => 'grupos',
      'ef_carga_php_include' => NULL,
      'ef_carga_php_clase' => NULL,
      'ef_carga_php_metodo' => NULL,
      'ef_carga_col_clave' => 'id_grupo',
      'ef_carga_col_desc' => 'grupo',
    ),
    2 => 
    array (
      'proyecto' => 'comunidades',
      'molde' => '34',
      'fila' => '169',
      'orden' => '3',
      'columna' => 'id_comunidad',
      'etiqueta' => 'Id Comunidad',
      'en_cuadro' => 1,
      'en_form' => 1,
      'en_filtro' => 1,
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
      'ef_obligatorio' => 0,
      'ef_carga_origen' => 'datos_tabla',
      'ef_carga_sql' => 'SELECT id_comunidad, comunidad FROM comunidades ORDER BY comunidad',
      'ef_carga_tabla' => 'comunidades',
      'ef_carga_php_include' => NULL,
      'ef_carga_php_clase' => NULL,
      'ef_carga_php_metodo' => NULL,
      'ef_carga_col_clave' => 'id_comunidad',
      'ef_carga_col_desc' => 'comunidad',
    ),
    3 => 
    array (
      'proyecto' => 'comunidades',
      'molde' => '34',
      'fila' => '170',
      'orden' => '4',
      'columna' => 'id_responsabilidad',
      'etiqueta' => 'Id Responsabilidad',
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
      'ef_obligatorio' => 0,
      'ef_carga_origen' => 'datos_tabla',
      'ef_carga_sql' => 'SELECT id_responsabilidad, responsabilidad FROM responsabilidades ORDER BY responsabilidad',
      'ef_carga_tabla' => 'responsabilidades',
      'ef_carga_php_include' => NULL,
      'ef_carga_php_clase' => NULL,
      'ef_carga_php_metodo' => NULL,
      'ef_carga_col_clave' => 'id_responsabilidad',
      'ef_carga_col_desc' => 'responsabilidad',
    ),
  ),
);
	}

}

?>