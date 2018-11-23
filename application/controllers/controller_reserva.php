<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class controller_reserva extends CI_Controller {
	function __construct(){
		parent::__construct();
		$this->load->model('model_reserva');

	}
	public function reservacliente()
	{
		$this->load->view('reservacliente');
	}

	public function registroreserva(){

		$usuario = $this->input->post('usuario');
		$documento = $this->input->post('documento');
		$password = $this->input->post('password');
		$fechareserva = $this->input->post('fechareserva');
		$fechafinal = $this->input->post('fechafinal');
		$numeropersonas = $this->input->post('numeropersonas');
		$numerocamas = $this->input->post('numerocamas');


		$resultado = $this->model_reserva->registrarreserva($usuario,$password,$fechareserva,$fechafinal,$numeropersonas,$numerocamas,$documento);
	}






}
?>
