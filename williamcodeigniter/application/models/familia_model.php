<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class familia_model extends CI_Model{
    
    public function listar(){
        $this->load->database();
        $query = $this->db->get('informacion');
        return $query->result_array();
        
    }
    public function crear($data){
        $this->load->database();
        $this->db->insert('informacion',$data);
        
    }
    
    public function eliminar($id){
        $this->load->database();
        $this->db->where('ID', $id);
        $this->db->delete('informacion');
        
    }
    
    public function consultar($id){
        $this->load->database();
        $this->db->where('id', $id);
        $query=$this->db->get('informacion');
        return $query->row_array();
        
        
    }
    
}
?>
