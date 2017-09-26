<?php
class Actores_model extends CI_Model{
    
    public function getActores(){
        
        
        $this->load->database();
        $query=$this->db->get('actores');
        return $query->result_array();
        
    }
}

?>
