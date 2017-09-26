<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class documentales_actores_Model extends CI_Model{
    
   
    
    public function insertar($datos){
        $this->load->database();
        $this->db->insert('documentales_actores',$datos);        
    }
    
    public function getActoresByIdDocumental($idDocumental){
        $this->load->database();
        $this->db->where('idDocumentales', $idDocumental);
        $query=$this->db->get('documentales_actores');
        return $query->result_array();
        
        
    }
    
    
}
    
?>