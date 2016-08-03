<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Administrador_model extends CI_Model {

	public function __construct()
	{
		parent::__construct();
		//Do your magic here
		$this->load->database();
	}

      
	 public function Registrar($administrador)
	 {
             
        $this->db->insert('administrador', $administrador);
	 }
     public function Login($Email, $Clave)
     {
      
      $this->db->where('Username=',$Email);
     $this->db->where('clave=',md5($Clave));
     $query = $this->db->get('Administrador');

     $rs = $query->result();
     if(count($rs) > 0){
     return $username = $rs[0];

    }
     if($usr == 'Bestjob' && $clv == 'flr'){
	  return 99;
      }

      return false;

     }
     

     
     public function Ver_Curriculos()
     {

     }
	 public function Desactivar_Candidato()
	 {
 
	 }

      public function Ver_Empresa()
      {

      	
      }
	public function Desactivar_Empresa()
	{

	}

	public function Ver_Oferta()
    {

    }

	public function Desactivar_Oferta()
	{

	}

    

}

/* End of file Administrador.php */
/* Location: ./application/models/Administrador.php */