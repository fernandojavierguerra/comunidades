<?php
class ci_buscador_de_persona extends comunidades_ci
{
	protected $s__datos_filtro;


	//---- Filtro -----------------------------------------------------------------------

	function conf__filtro(toba_ei_formulario $filtro)
	{
		if (isset($this->s__datos_filtro)) {
			$filtro->set_datos($this->s__datos_filtro);
		}
	}

	function evt__filtro__filtrar($datos)
	{
		$this->s__datos_filtro = $datos;
	}

	function evt__filtro__cancelar()
	{
		unset($this->s__datos_filtro);
	}

	//---- Cuadro -----------------------------------------------------------------------

	function conf__cuadro(toba_ei_cuadro $cuadro)
	{
		if (isset($this->s__datos_filtro)) {
			//$cuadro->set_datos($this->dep('datos')->tabla('personas')->get_listado($this->s__datos_filtro));
			$cuadro->set_datos($this->dep('datos')->tabla('personas')->get_listado_familiar($this->s__datos_filtro));
		}
		$this->dep('cuadro')->desactivar_modo_clave_segura();

	}

	function evt__cuadro__seleccion($datos)
	{
		//$this->dep('datos')->cargar($datos);
		//$this->set_pantalla('pant_edicion');
	}

}
?>