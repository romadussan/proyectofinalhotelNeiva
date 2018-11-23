<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
date_default_timezone_set('America/Bogota');
class model_reserva extends CI_Model
{
     function __construct()
     {
          parent::__construct();
     }

     public function registrarreserva($usuario,$documento,$password,$fechareserva,$fechafinal,$numeropersonas,$numerocamas){

        $sql="INSERT INTO reserva (usuario,documento,contrasena,inireserva,finreserva,numpersonas,numcamas) VALUES ('$usuario','$documento','$password','$fechareserva','$fechafinal','$numeropersonas','$numerocamas')";
        $query = $this->db->query($sql);
        redirect("".base_url()."index.php/login/home");
        if($query === 1){
            return $query->result();
        }
    }

    function consultaReser()
    {
      $sql="select * from usuarios ";
            $restul= $this->db->query($sql);
            return $restul->result();
    }


    function eliminaReser($id){
      $this->db->delete('usuarios',array('id'=>$id));
    }

    function modifiRe($usuario, $contraseña, $id){
        $this->db->where('id',$id);
        $this->db->update('usuarios',array('usuario'=>$usuario,'password'=>$password,'fechareserva'=>$fechareserva,'fechafinal'=>$fechafinal,'numeropersonas'=>$numeropersonas,'numerocamas'=>$numerocamas,'documento'=>$documento));
    }

}




?>
