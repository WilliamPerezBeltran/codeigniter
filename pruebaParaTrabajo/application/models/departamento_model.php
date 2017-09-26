<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class departamento_model extends CI_Model{
    
     public function getDepartamento() {
         $this->load->database();
         $query = $this->db->get('table_departamentos');
        return $query->result_array();
    }
    
   
    
   
}
?>