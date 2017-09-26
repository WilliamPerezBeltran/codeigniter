<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class tipo_model extends CI_Model{
    
     public function getTipo() {
         $this->load->database();
         $query = $this->db->get('table_tipo');
        return $query->result_array();
    }
    
   
    
   
}
?>