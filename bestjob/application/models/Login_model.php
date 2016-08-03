<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Login_model extends CI_Model {

	public $variable;

	public function __construct()
	{
		parent::__construct();
		$this->load->database();
		
	}

	public function inicio_seccion($Email, $Clave)
	{
       $this->db->where('Email', $Email);
	   $this->db->where('Clave', $Clave);
	   $query = $this->db->get('candidato');
	   if($query->num_row()== 1)
	   {
	   	return $query->row();

	   }else{
	   $this->session->set_flashdata('Usuario_incorrecto', 'Los datos introducidos son incorrectos');
	   redirect(base_url().'Login','refresh');

	}


		# code...
	}

}

/* End of file Login_model.php */
/* Location: ./application/models/Login_model.php */