<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class controller_empleados extends CI_Controller {



  public function empleado()
	{
		$this->load->view('view_empleados');
	}


}
?>
