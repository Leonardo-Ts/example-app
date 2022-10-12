<?php
defined('BASEPATH') or exit('No direct script access allowed');
class EjemploCI extends CI_Controller
{


	public function getMetodo1()
	{
		//print "Hola";
		$this->load->model('Modelo');
		$resultado = $this->Modelo->getBoletos();
		print json_encode($resultado);
	}

	public function getBoletosById($Id)
	{
		$this->load->model('Modelo');
		$resultado = $this->Modelo->getBoletosById($Id);
		print json_encode($resultado);
	}

	//vuelos -------------------
	public function getVuelos()
	{
		//print "Hola";
		$this->load->model('Modelo');
		$resultado = $this->Modelo->getVuelos();
		print json_encode($resultado);
	}
	//personal vuelo-------------------
	public function getPersonalvuelo()
	{
		//print "Hola";
		$this->load->model('Modelo');
		$resultado = $this->Modelo->getPersonalvuelo();
		print json_encode($resultado);
	}
}
