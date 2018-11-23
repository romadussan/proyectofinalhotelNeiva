<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class login extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->model('model_login');
	}

	public function index()
	{
		$this->load->view('view_login');
	}
	public function administracion(){

}

	public function validaAcceso(){

		$user= $this->input->post('user');
		$pass= $this->input->post('pass');
		$result=$this->model_login->cuentaUser($user,$pass);

		//
		echo $result;
		if($result==1){
			$result=$this->model_login->consultaUser($user,$pass);
			$session=array(
				'USUARIO'=> $result->usuario,
				'CONTRASENA'=> $result->contrasena,
				'ROL'=> $result->nombre_rol,
				'is_logged_in'=>TRUE ,
			);
			$this->session->set_userdata($session);

			echo $result->nombre_rol;
			if ($result->nombre_rol=='Admin') {

				redirect("".base_url()."index.php/login/home_admin");
			}
			if ($result->nombre_rol=='cliente') {
				redirect("".base_url()."index.php/login/home_cliente");
			}
			if ($result->nombre_rol=='camarero') {
				redirect("".base_url()."index.php/login/home_camarero");
			}
		}else{
			echo "no está registrado";
		}
	}
	public function home_admin(){

		$result['usuari']=$this->model_login->consultaUsusarios();
		$this->load->view('header_admin');
		$this->load->view('view_home_admin',$result);
	}
	public function home_cliente(){
		$this->load->view('view_home_cliente');
	}
	public function home_camarero(){
		$this->load->view('view_home_cama');
	}

	public function eliminaUsuario($id){
		$this->model_login->eUsusario($id);
		redirect("".base_url()."index.php/login/home_admin");
		//$this->home_admin();
	}
	public function modificaUsuario($id){
		$user= $this->input->post('user');
		$pass= $this->input->post('pass');

		$this->model_login->mUsusario($user,$pass,$id);
		redirect("".base_url()."index.php/login/home_admin");
		//$this->home_admin();
	}

	public function agregaUsuario(){
		$user= $this->input->post('user');
		$pass= $this->input->post('pass');

		$iduser=$this->model_login->aUsusario($user,$pass);
		redirect("".base_url()."index.php/login/home_admin");
		//$this->home_admin();
	}

}
