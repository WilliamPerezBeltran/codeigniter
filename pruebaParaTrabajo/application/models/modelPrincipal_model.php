<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class modelPrincipal_model extends CI_Model{
    
     public function insertar($data){
            $this->load->database();
            $this->db->insert('datos',$data);
	}
        
   
    
   
}
?>