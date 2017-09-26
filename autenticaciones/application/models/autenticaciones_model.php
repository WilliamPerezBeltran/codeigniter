<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class autenticaciones_model extends CI_Model{
    
   public function eliminar($id){
        $this->load->database();
        $this->db->where('id', $id);
        $this->db->delete('informacion');
        
    }
    public function listar(){
        $this->load->database();
        $query=$this->db->get('informacion');
        
        return $query->result_array();
        
    }
    
    public function insertar($datos){
        $this->load->database();
        $this->db->insert('informacion',$datos);        
    }
     public function consultar($pEmail,$pPassword) {
        $this->load->database();
        $this->db->where('correo', $pEmail);
        $this->db->where('pasword', $pPassword);
        $query = $this->db->get('informacion');
        return $query->result_array(); 
        //if($query->num_rows()==1){
          //  return true;
        //}else{
          //  return false; 
 
        }
    }
    
    
    

    
?>