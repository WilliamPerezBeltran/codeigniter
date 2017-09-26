<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class googleChart_model extends CI_Model {

   
    public function getInfoGoogleChart() {
        $this->load->database();
        $query=$this->db->get('googlemaps');
        return $query->result_array();
    }

}

?>