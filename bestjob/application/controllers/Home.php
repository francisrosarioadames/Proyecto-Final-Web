<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		//Do your magic here
	}

	public function index()
	{
		
		$this->load->view('nav');
    $this->load->view('Home');
    $this->load->view('footer');
	}
      
       public function login()
      {
        $this->load->view('nav');
      	$this->load->view('Login_view');
         $this->load->view('footer');
      }

      function nosotros()
      {
         $this->load->view('nav');
      	$this->load->view('Nosotros_view');
          $this->load->view('footer');

      }

      function ayuda()
      {
        $this->load->view('nav');
      	$this->load->view('Ayuda_view');
          $this->load->view('footer');
      }

      public function contacto()
      {
        $this->load->view('nav');
      	$this->load->view('Contacto_view');
          $this->load->view('footer');
      	# code...
      }

       public function registrarse()
      {
        $this->load->view('nav');
      	$this->load->view('Registrarse_view');
          $this->load->view('footer');
      }

      public function servicios()
      {
        $this->load->view('nav');
      	$this->load->view('Servicios_view');
          $this->load->view('footer');
      }

     public function politica_privasidad()
     {
      $this->load->view('nav');
     	$this->load->view('Politicadeprivacidad_view');
        $this->load->view('footer');
     	# code...
     }
      public function Ver_empleos()
      {
        $this->load->view('nav');
        $this->load->view('ver_empleo');
        $this->load->view('footer');
      	/*$this->load->view('');*/
      	# code...
      }
        
        public function regresar(){

           $this->load->view('nav');
            $this->load->view('Home');
           /* redirect('Home');*/
            $this->load->view('footer');


         }

         public function guardando()
         {

           $this->load->view('nav');
          $this->load->view('guardando');
          $this->load->view('footer');
          
         }

      public function Index_Candidato()
      {
          
      } 
      public function Index_Empresa()
      {
       
      } 
      public function Index_Administrador()
      {
        
      }

     
}

/* End of file Index.php */
/* Location: ./application/controllers/Index.php */