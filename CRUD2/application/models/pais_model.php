<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class pais_model extends CI_Model {

    public function get_informacion() {
        $this->load->database();        
        $query = $this->db->get('pais');
        //echo "Real Madrid:".$this->db->last_query();
        return $query->result_array();
    }

   
}

?>