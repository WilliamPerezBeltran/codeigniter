<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class controladorEstudiantes extends CI_Controller {

	public function listarEstudiantes(){
		$this->load->view('adicionarEstudiantes');
	}
}
