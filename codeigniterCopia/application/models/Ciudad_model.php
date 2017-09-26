<?php

class Ciudad_model extends CI_Model{
    
    
    
    public function consultar(){
        $this->load->database();
        $query= $this->db->get('city', 10);
        return $query->result_array(); 
    }
}
