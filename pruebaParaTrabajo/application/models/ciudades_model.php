<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ciudades_model extends CI_Model{
    
     public function getCiudades() {
         $this->load->database();
         $query = $this->db->get('table_ciudades');
        return $query->result_array();
    }
    
   
    
   
}
?>