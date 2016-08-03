<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class registrar_model extends CI_Model {

	public $variable;

	public function __construct()
	{
		parent::__construct();
		$this->load->database();
		
	}

    
}

/* End of file registrar_model.php */
/* Location: ./application/models/registrar_model.php */