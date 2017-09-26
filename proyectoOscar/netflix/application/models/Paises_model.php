<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Paises_model extends CI_Model{
    
    
    
    public function buscarpaises(){
        $this->load->database();
        $query=$this->db->get('pais');
        return $query->result_array();
        
    }
    
    
    
    
}
?>
