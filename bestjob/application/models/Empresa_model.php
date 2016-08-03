<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Empresa_model extends CI_Model {

	     public function __construct()
	     {
		     parent::__construct();
		     //Do your magic here
		     $this->load->database();

	      }
             //Registrar Empresa
         public function Registrar($Email, $Clave, $Nombre, $Rnc, $Dedicacion, $Telefono_Contacto, $Logo, $Direccion, $Ciudad, $Pais, $Nombre_persona_contacto, $Departamento_Contacto, $Email_Contacto)
         {
         	$data = array(
         		'Email' => $Email,
         		'Clave' => $Clave,
         		'Nombre' => $Nombre,
         		'Rnc' => $Rnc,
         		'Dedicacion' => $Dedicacion,
         		'Telefono_Contacto' => $Telefono_Contacto,
         		'Logo' => $Logo,
         		'Direccion' => $Direccion,
         		'Ciudad' => $Ciudad,
         		'Pais' => $Pais,
         		'Nombre_persona_contacto' => $Nombre_persona_contacto,
         		'Departamento_Contacto' => $Departamento_Contacto,
         		'Email_Contacto' => $Email_Contacto

         		);

              return $this->db->insert('Empresa', $data);
               
             /*  return $this->db->insert_id();*/
         }
          //Ingreso de la empresa
	      function Ingresar($Email, $Clave)
	      {
          
              $this->db->where('Email=', $Email);
             $this->db->where('Clave=', $Clave);
             $query = $this->db->get('Empresa');

             $rs = $query->result();
             if(count($rs) > 0)
             {
             return $username = $rs[0];  
             }

	      }
           //Ver los Curriculos de los administradores
	      function Ver_Curriculo($id, $Candidato)
	      {

	      	$this->db->where('IdCandidato', $id);
	      	$this->db->get('candidato', $Candidato);

	      }
            //Publicar los empleos
	      function Publicar_Oferta($Puesto, $Descripcion, $Nivel_Academico, $Edad_Maxima, $Horario, $salario, $Comentario, $Fecha, $Estado, $Experiencia_laboral)
	      {
            
	      	$data = array(
	      		'Puesto' => $Puesto,
                'Descripcion' => $Descripcion,
                'Nivel_Academico' => $Nivel_Academico,
                'Edad_Maxima' => $Edad_Maxima,
                'Horario' => $Horario,
                'salario' => $salario,
                'Comentario' => $Comentario,
                'Fecha' => $Fecha,
                'Estado' => $Estado,
                'Experiencia_laboral' => $Experiencia_laboral
               
	      		); 

	      	   $this->db->insert('oferta', $data);
	      	
		      
	      }
}
/* End of file Empresa.php */
/* Location: ./application/models/Empresa.php */