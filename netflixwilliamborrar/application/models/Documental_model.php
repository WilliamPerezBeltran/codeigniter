<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Documental_model extends CI_Model{
    
//    public function __construct(){
//    parent::__construct();
//    $this->load->database();
//    }
    
    public function get_documentales(){
        $this->load->database();
        $query=$this->db->get('documentales');
        return $query->result_array();
              
    }
    
    public function eliminar(){
       
      
    }
    
   public function insertar(){
       
        
    }
    
    
    
    
}
?>