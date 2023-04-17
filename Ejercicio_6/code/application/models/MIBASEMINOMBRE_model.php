<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class MIBASEMINOMBRE_model extends CI_Model {
	
	public function __construct()
	{
		parent::__construct();
	}
	public function personas()
	{
		$this->load->database();
		$query = $this->db->query("SELECT * FROM PERSONA");
		return $query->result();
	}
	
}
