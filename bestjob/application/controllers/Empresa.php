<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Empresa extends CI_Controller {

    public function __construct()
    {
	parent::__construct();
    $this->load->model('Empresa_model');

	//Do your magic here
    }
	public function index()
	{
		/* $this->Empresa_model->Registrar();*/
          /* $this->load->view('Registrarempresa_view');*/

        /*$ciudad = $this->input->post('ciudad');
        $ciudad = $this->input->post('ciudad');
        $ciudad = $this->input->post('ciudad');*/
        $this->load->view('nav');
        $this->load->view('Index_empresa');
        $this->load->view('footer');
     
	}
  
    public function Registrar()
    {
     /*$this->Empresa_model->Registrar($Empresa);*/

      

        $Email_Contacto = $this->input->post('Email');
        $Clave = $this->input->post('Clave');
        $Nombre = $this->input->post('Nombre');
        $Rnc = $this->input->post('Rnc');
        $Dedicacion = $this->input->post('Dedicacion');
        $Telefono_Contacto = $this->input->post('Telefono_Contacto');
        $Logo = $this->input->post('Logo');
        $Direccion = $this->input->post('Direccion');
        $Ciudad = $this->input->post('Ciudad');
        $Pais = $this->input->post('Pais');
        $Nombre_persona_contacto = $this->input->post('Nombre_persona_contacto');
        $Departamento_Contacto = $this->input->post('Departamento_Contacto');
        $Email_Contacto = $this->input->post('Email_Contacto');

      $this->form_validation->set_rules('Email', 'Email', 'required');
      $this->form_validation->set_rules('Clave', 'Clave', 'required');
       $this->form_validation->set_rules('Email_Contacto', 'Email_Contacto', 'required');
      $this->form_validation->set_rules('Nombre_persona_contacto', 'Nombre_persona_contacto', 'required');
       $this->form_validation->set_rules('Telefono_Contacto', 'Telefono_Contacto', 'required');

        if($this->form_validation->run() === true){

        $this->load->model('Empresa_model');
        $this->Empresa_model->Registrar($Email, $Clave, $Nombre, $Rnc, $Dedicacion, $Telefono_Contacto, $Logo, $Direccion, $Ciudad, $Pais, $Nombre_persona_contacto, $Departamento_Contacto, $Email_Contacto)

    }else{

       /*  echo "Los datos Introducidos son Incorrectos";*/
         $this->load->view('nav');
       $this->load->view('Registrarempresa_view');
       $this->load->view('footer');
    }

      
    /* $this->personModel->save($person);*/

    }
    public function Publicar_Empleos()
    {   

       

        $Puesto = $this->input->post('Puesto');
        $Descripcion = $this->input->post('Descripcion');
        $Nivel_Academico = $this->input->post('Nivel_Academico');
        $Edad_Maxima = $this->input->post('Edad_Maxima');
        $Horario = $this->input->post('Horario');
        $salario = $this->input->post('salario');
        $Comentario = $this->input->post('Comentario');
        $Fecha = $this->input->post('Fecha');
        $Estado = $this->input->post('Estado');
        $Experiencia_laboral= $this->input->post('Experiencia_laboral');

         $this->form_validation->set_rules('Puesto', 'Puesto', 'required');
         $this->form_validation->set_rules('Descripcion', 'Clave', 'required');
         $this->form_validation->set_rules('Nivel_Academico', 'Nivel_Academico', 'required');
         $this->form_validation->set_rules('salario', 'salario', 'required');
         $this->form_validation->set_rules('Fecha', 'Telefono_Contacto', 'required');


        if($this->form_validation->run() === true){
        
        $this->load->model('Empresa_model');
        $this->Empresa_model->Publicar_Oferta();


        $this->load->view('nav');
        $this->load->view('Publicarempleo_view');
        $this->load->view('footer');
        
    }

    public function Servicios()
    {  
         $this->load->view('nav');
        $this->load->view('Servicios_view');
         $this->load->view('footer');

    }

    public function Panel_Controlar()
    {
         
    }

    public function Contacto()
    {
        $this->load->view('nav');
       $this->load->view('Contacto_view');
       $this->load->view('footer');
    }

    public function Ayuda()
    {  
        $this->load->view('nav');
        $this->load->view('Ayuda_view');
        $this->load->view('footer');

    }
    public function Nosotros()
    {
        $this->load->view('nav');
      $this->load->view('Nosotros');
      $this->load->view('footer');
    }

    public function Ver_Curriculos()
    {
     
      
    }

}


/* End of file Empresa.php */
/* Location: ./application/controllers/Empresa.php */