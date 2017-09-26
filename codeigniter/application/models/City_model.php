<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class City_model extends CI_model{//predefinida
    public function consultar(){
        $this->load->database();//coneccion con DB
        $query= $this->db->get('city',10);//coge 10 valores de la table city que se encuentran en la base de datos 
        return $query->result_array();
    }
}

?>