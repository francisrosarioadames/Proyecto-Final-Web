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

	public function Administrador_candidato()
	{
         $this->load->view('nav');
      $this->load->view('Administrador_candidato');
        $this->load->view('footer');




function deletecandidato($id){
      $id = (isset($_GET['ID']))?$_GET['ID']+0:0;
      $this->Administrador_model->eliminar($id);
      
           $this->load->view('nav');
      $this->load->view('Administrador_candidato');
      $this->load->view('footer');

      }


     function deativatecandidato($id){
      $id = (isset($_GET['ID']))?$_GET['ID']+0:0;
      $this->Administrador_model->eliminar($id);
      
           $this->load->view('nav');
      $this->load->view('Administrador_candidato');
      $this->load->view('footer');

      }


	}


  public function Administrador()
  {
        $this->load->view('nav');
        $this->load->view('Administrador_view');
        $this->load->view('footer');
  }



   




    public function Administrador_Empresa()
  {
        $this->load->view('nav');
        $this->load->view('Administrador_Empresa');
        $this->load->view('footer');
  }


function deleteempresa($id){
      $id = (isset($_GET['ID']))?$_GET['ID']+0:0;
      $this->Administrador_model->eliminar($id);

           $this->load->view('nav');
      $this->load->view('Administrador_Empresa');
      $this->load->view('footer');

      }


      function deactivateempresa($id){
      $id = (isset($_GET['ID']))?$_GET['ID']+0:0;
      $this->Administrador_model->desativar($id);

           $this->load->view('nav');
      $this->load->view('Administrador_Empresa');
      $this->load->view('footer');

      }

  public function Administrador_oferta()
  {
        $this->load->view('nav');
        $this->load->view('Administrador_oferta');
        $this->load->view('footer');
  }


function deleteoferta($id){
      $id = (isset($_GET['ID']))?$_GET['ID']+0:0;
      $this->Administrador_model->eliminar($id);

           $this->load->view('nav');
      $this->load->view('Administrador_oferta');
      $this->load->view('footer');

      }

      function deactivateoferta($id){
      $id = (isset($_GET['ID']))?$_GET['ID']+0:0;
      $this->Administrador_model->desativar($id);
      

           $this->load->view('nav');
      $this->load->view('Administrador_oferta');
      $this->load->view('footer');

      }









  