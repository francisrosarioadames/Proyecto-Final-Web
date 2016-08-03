<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Candidato extends CI_Controller {

	//Do your magic here

    public function __construct()
    {
    parent::__construct();
    $this->load->library('form_validation');
    $this->load->helper('form');
    $this->load->model('Candidato_model');
    $this->load->helper(array('session'));
    $this->load->library(array('url'));
    //Do your magic here
    }

  

	public function index()
	{
        
     $data  = array();
          $data['Candidatos'] = $this->Candidato_model->listar();

           $this->load->view('nav');
        $this->load->view('Registro_view');
        $this->load->view('footer');
 

      
	}

    public function procesar()
    {
       $this->load->library('form_validation');
       $this->form_validation->set_rules('nombre', 'Nombre de usuario', 'required|min_length[5]|max_length[12]');
       $this->form_validation->set_rules('clave', 'clave', 'required|min_length[4]');
      /* $this->form_validation->set_rules('confirmClave', 'Confirmar Clave', 'required');*/
       $this->form_validation->set_rules('email', 'Email', 'required|valid_email');


       if ($this->form_validation->run() == FALSE) {
            
            $this->load->view('');
        } else {
            echo "Datos cargador correctamente";
        }
     
    }

     public function editar()
     {
   
        $this->load->view('');
     }

    public function Nuevo()
    {
        $this->load->helper('form');
        $this->load->library('form_validation');
        $this->form_validation->set_rules('email', 'email', '  required|min_length[6]|max_length[100]|valid_email|callback_comprobar_email_ajax|xss_clean');
        $this->form_validation->set_rules('nombre', 'nombre', 'required|trim|min_length[2]|max_length[100]|callback_comprobar_usuario_ajax|xss_clean');
         $this->form_validation->set_rules('clave', 'clave', 'required|min_length[5]');

         if($this->input->post("submit")){
       /* if($this->form_validation->run() === true){*/
        //Si la validación es correcta, cogemos los datos de la variable POST
        //y los enviamos al modelo
        $add=$this->Çandidato_model->guardar_candidato(
       $this->input->post("Nombre");
       $this->input->post("Apellido");
       $this->input->post("Email");
       $this->input->post("Clave");
       $this->input->post("Cedula");
       $this->input->post("Fecha_de_nacimiento");
       $this->input->post("Estado_civil");
       $this->input->post("Foto");
       $this->input->post("Sexo");
       $this->input->post("ciudad");
       $this->input->post("Nacionalidad");
       $this->input->post("Nivel_academico");
       $this->input->post("Esta_laborando");
       
            );
 
        }

        if($add==true){
            //Sesion de una sola ejecución
            $this->session->set_flashdata('correcto', 'Curriculum añadido correctamente');
        }else{
            $this->session->set_flashdata('incorrecto', 'Usuario añadido correctamente');
        }
         
        //redirecciono la pagina a la url por defecto
       $this->load->view('nav');
       $this->load->view('Registro_view');
       $this->load->view('footer');
       
       
    /*
        redirect(base_url());*/
    }
        /*$this->load->model('Candidato_model');
        $this->Candidato_model->guardar_candidato($Nombre, $Apellido, $Email, $Clave,  $Cedula, $Fnacimiento, $Estado_civil,  $Foto,  $Sexo, $Ciudad, $Nacionalidad, $Nivel_academico, $Esta_laborando)*/
      

  



         public function registrarse()
         {
             $this->load->view('nav');
             $this->load->view('Registro_view');
             $this->load->view('footer');
         }
    
         public function comprobar_Email_ajax(){
        $Email = $this->input->post('Email');
        $comprobar_email = $this->Candidato_model->verifica_email($Email);
        if($comprobar_Email == $Email)
        {
            $this->form_validation->set_message('comprobar_usuario_ajax', '%s: ya existe en la base de datos');
            return FALSE;
        } else 
        {
            echo '<div style="display:none">1</div>';
            return TRUE;
        }
        }


 
      public function Ver_empleos($data)
      {

            $this->load->view('nav');
            $this->load->view('ver_empleo');
            $this->load->view('footer');
          # code...
      }

    
   /* //NO tiene minimo de 5 caracteres o mas de 12 caracteres  
    if(inputPassword1.val().length < 5 || inputPassword1.val().length > 12){  
        reqPassword1.addClass("error");  
        inputPassword1.addClass("error");  
        return false;  
    }  
    // SI longitud, NO VALIDO numeros y letras  
    else if(!inputPassword1.val().match(/^[0-9a-zA-Z]+$/)){  
        reqPassword1.addClass("error");  
        inputPassword1.addClass("error");  
        return false;  
    }  
    // SI rellenado, SI email valido  
    else{  
        reqPassword1.removeClass("error");  
        inputPassword1.removeClass("error");  
        return true;  
    }  */




   /* if($this->input->post('candidato')){
    	
        $this->form_validation->set_rules('Email', 'Email', 'required|min_length[6]|max_length[100]|valid_email|callback_comprobar_email_ajax|xss_clean');
        //aquí llamamos al callback comprobar_username_ajax 
        $this->form_validation->set_rules('username', 'Usuario', 'required|trim|min_length[2]|max_length[100]|callback_comprobar_usuario_ajax|xss_clean');
        $this->form_validation->set_rules('password', 'Password', 'required|trim|min_length[6]|max_length[100]|xss_clean');
 
        //lanzamos mensajes de error si es que los hay
        $this->form_validation->set_message('required', '%s: es requerido');
        $this->form_validation->set_message('min_length', '%s: debe tener al menos %s carácteres');
        $this->form_validation->set_message('max_length', '%s: debe tener al menos %s carácteres');
        $this->form_validation->set_message('valid_email', '%s: debe escribir un email válido');
 
              }*/
  /* }*/

    



}

/* End of file Candidato.php */
/* Location: ./application/controllers/Candidato.php */