<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class paises_model extends CI_Model{
    
    public function buscarpais(){
        $this->load->database();
        $query=$this->db->get('paises');
        return $query->result_array();
        
    }
    
  
}
?>