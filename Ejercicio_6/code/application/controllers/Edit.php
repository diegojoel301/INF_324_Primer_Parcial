<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Lectura extends CI_Controller {
	
	public function index()
	{
		$this->load->model("MIBASEMINOMBRE_model");
		$filas = $this->MIBASEMINOMBRE_model->personas();
		$datos["filas"] = $filas;
		$this->load->view('view_lectura', $datos);
	}
}