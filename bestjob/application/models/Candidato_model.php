<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Candidato_model extends CI_Model {

	public function __construct()
	{
		parent::__construct();
		//Do your magic here
		$this->load->database();
	}

    public function Registrar($candidato)
    {
        
        $this->db->insert('Candidato', $candidato);
         return $this->db->insert_id();

    }

    function verifica_email($Email)
    {
     
    
    }
    public function editar($id, $candidato)
    {
      /*$data = array(
       'nombre' => $nombre,
      'apellido' => $apellido,
      'email' => $email,
      'clave' => $clave,
      'cedula' => $cedula,
      'Fnacimiento' => $Fnacimiento,
      'estadocivil' => $estadocivil,
      'foto' => $foto,
      'sexo' => $sexo,
      'ciudad' => $ciudad,
      'nacionalidad' => $nacionalidad,
      'nivelacademico' => $nivelacademico,
      'estalaborando' => $estalaborando 

      );
        $this->db->update('candidato', $data);*/




    }

    public function listar($data)
    {
      //hacemos la colsulta
      $consulta=$this->db->query("SELECT * FROM candidato;");
        //devolvemos el resultado de la consulta
        return $consulta->result();
        /*
         $query = $this->db->get('candidato');
         if($query->num_rows() > 0) return $query->result();
         else return false;*/
    }


   public function guardar_candidato($Nombre, $Apellido, $Email, $Clave,  $Cedula, $Fnacimiento, $Estado_civil,  $Foto,  $Sexo, $Ciudad, $Nacionalidad, $Nivel_academico, $Esta_laborando)
   {

  $consulta= $this->db->query("'SELECT Nombre, Apellido, Email, Clave,  Cedula, Fnacimiento, Estado_civil,  Foto,  Sexo, Ciudad, Nacionalidad, Nivel_academico, Esta_laborando FROM candidato where Email like '$Email'");
    
         if($consulta->num_rows()==0){
            $consulta=$this->db->query("INSERT INTO candidato VALUES(NULL, '$Nombre', '$Apellido', '$Email', '$Clave',  '$Cedula', '$Fnacimiento', '$Estado_civil',  '$Foto',  '$Sexo', '$Ciudad', '$Nacionalidad', '$Nivel_academico', '$Esta_laborando');");
            if($consulta==true){
              return true;
            }else{
                return false;
            }
        }else{
            return false;
        }

     /*$data = array(     
      'Nombre' => $Nombre,
      'Apellido' => $Apellido,
      'Email' => $Email,
      'Clave' => $Clave,
      'Cedula' => $Cedula,
      'Fnacimiento' => $Fnacimiento,
      'Estado_civil' => $Estado_civil,
      'Foto' => $Foto,
      'Sexo' => $Sexo,
      'Ciudad' => $Ciudad,
      'Nacionalidad' => $Nacionalidad,
      'Nivel_academico' => $Nivel_academico,
      'Esta-laborando' => $Esta_laborando 
      );

     return $this->db->insert('candidato', $data);*/

   }

function cargarCandidato($id){

 $Candidato = new stdClass();
 $Candidato->ID= 0;
 $Candidato->nombre= "";
 $Candidato->apellido = ""; 
 $Candidato->email = "";
 $Candidato->cedula ="";  
 $Candidato->Fnacimiento = "";
 $Candidato->estadocivil = "";
 $Candidato->foto ="";  
 $Candidato->sexo = "";
 $Candidato->ciudad = "";
 $Candidato->nacionalidad ="";  
 $Candidato->nivelacademico = "";
 $Candidato->estalaborando = "";
 $Candidato->nivelacademico = "";

 $query = $this->db->where('IdCandidato', $id);
 $query = $this->db->get('candidato');

 $rs = $query->result();
 if(count($rs) > 0){
  $candidato = $rs[0];

 }

 return $Candidato;
}


    public function Ingresar($Email, $Clave)
    {
        $this->db->where('Email=', $Email);
        $this->db->where('Clave=', $Clave);
        $query = $this->db->get('Candidato');

        $rs = $query->result();
        if(count($rs) > 0){
        return $username = $rs[0];  
          
    }


      /* public function editar_curriculum($id, $Candidato)
        {
             $query = $this->db->where('IdCandidato=', $id);
             $query = $this->db->update('candidato', $Candidato);

             $rs = $query->result();

            # code...   
        }*/

    /* public function curriculum_detalle($id){
        $this->db->where('IdCandidato', $id);
        return $this->db->get('candidato');
    }

    }*/

    /*public function Enviar_Curriculo()
    {
     

    }
*/
   /* public function Ver_Oferta($limit = 10, $offset = 0)
    {
          $this->db->order_by('IdOferta', 'asc');
          return $this->db->get('ofertas', $limit, $offset);
      
    }*/
   

}
}

/* End of file Candidato.php */
/* Location: ./application/models/Candidato.php */