<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Administrador extends CI_Controller {


 public function __construct()
 {
 	parent::__construct();
    $this->load->model('Administrador_model');
    $this->load->helper(array('session'));
    $this->load->library(array('url'));
 	//Do your magic here
 }
	public function index()
	{
          $this->load->view('Administrador_view',$data);
	  if($this->session->userdata('Username') == FALSE || $this->session->userdata('Username') != 'administrador')
        {
            redirect(base_url().'login');
        }else()
        $data['titulo'] = 'Bienvenido Administrador';
      

       $ciudad = $this->input->post('ciudad');
        $ciudad = $this->input->post('ciudad');
        $ciudad = $this->input->post('ciudad');

	}

	public function Login()
	{
         $this->load->view('nav');
       $this->load->view('Login_view');
        $this->load->view('footer');
	}

	public function Registrarse()
	{
         $this->load->view('nav');
      $this->load->view('Registrarse_view');
        $this->load->view('footer');
	}

	public function Curriculos()
	{
        $this->load->view('nav');
        $this->load->view('');
        $this->load->view('footer');
	}

    public function Empleos()
    {
         

    }


    public function Contacto()
    {

        $this->load->view('Contacto_view');

    }
    public function Ayuda()
    {
       $this->load->view('nav');
       $this->load->view('Ayuda_view');

      $this->load->view('footer');
    
    }
    public function Politica_privacidad()
    {
        $this->load->view('nav');
        $this->load->view('Politicadeprivasidad_view');
        $this->load->view('footer');
    }
    }
    public function Servicios()

    {
        $this->load->view('nav');
          $this->load->view('Servicios_view');
          $this->load->view('footer');
    } 


    public function Panel_Control()
    {
 
    }

    public function Nosotros()
    {
          $this->load->view('nav');
          $this->load->view('Nosotros_view');
          $this->load->view('footer');

    }

 }

/* End of file Administrador.php */
/* Location: ./application/controllers/Administrador.php */