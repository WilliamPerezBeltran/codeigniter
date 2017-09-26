<?php
class Graficas_model extends CI_Model{
    
    public function getregion(){
        
        $this->load->database();
        $this->db->select('Continent');
        $this->db->select('Name');
        $this->db->select('Population');
        
        $this->db->where('Continent', 'South America');
        $query=$this->db->get('country');
         return $query->result_array();
    }
    
    public function cambioGrafica($continent){
        
        $this->load->database();
        $this->db->select('Continent');
        $this->db->select('Name');
        $this->db->select('Population');
        
        $this->db->where('Continent', $continent);
        $query=$this->db->get('country');
         return $query->result_array();
    }
}

?>
