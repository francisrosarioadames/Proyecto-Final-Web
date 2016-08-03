<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Registrarse extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		//Do your magic here

		$this->load->model('Registrar_model');
		
	}

	public function index()
	{
		  $this->load->view('nav');
		$this->load->view('Registrarse_view');
		  $this->load->view('footer');
	}
      
     function registro_candidato()
     {
     	$this->load->view('nav');
     	$this->load->view('Registro_view');
     	$this->load->view('footer');
     } 

    function registro_Empresa()
    {
    	$this->load->view('nav');
    	$this->load->view('Registrarempresa_view');
    	$this->load->view('footer');
    }

}

/* End of file Registrarse.php */
/* Location: ./application/controllers/Registrarse.php */