<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Familia_model extends CI_Model{
    
    
    public function get_documentales(){
        $this->load->database();
        
        $this->db->select('informacion.ID as informacionID' );
        $this->db->select('informacion.nombre as informacionnombre' );
        $this->db->select('informacion.telefono as informaciontelefono ' );
        $this->db->select('informacion.celular as informacioncelular' );
        $this->db->select('informacion.correo as informacioncorreo' );
        $this->db->select('informacion.direccion as informaciondireccion' );
        $this->db->select('informacion.pasatiempo as informacionpasatiempo' );
        $this->db->select('informacion.idPaises as informacionidPaises' );
        
        $this->db->select('paises.ID as paisesID' );
        $this->db->select('paises.pais as paisespais' );
        $this->db->join('paises', 'informacion.idPaises = paises.ID ');
        
        
        
        
        
        $query=$this->db->get('informacion');
        return $query->result_array();
        
    }

     
    public function eliminar($id){
        
        
        $this->load->database();
        $this->db->where('ID', $id);
        $this->db->delete('informacion');
        
    }
    
    public function crear($info){
        $this->load->database();
        $this->db->insert('informacion', $info);
        
    }
    
    public function consultar($id){
        $this->load->database();
        $this->db->where('ID', $id);
        $query=$this->db->get('informacion');
        return $query->row_array();
    }
    
    public function actualizar($id,$data){
        $this->load->database();
        $this->db->where('ID', $id);
        $this->db->update('informacion', $data);        
    }
    
    public function get_pinturas(){
         
        $this->load->database();
        
        $query=$this->db->get('pinturas');
        return $query->result_array();
        
    }


    
    
   
}
?>