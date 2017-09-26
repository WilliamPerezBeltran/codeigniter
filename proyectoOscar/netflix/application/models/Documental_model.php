<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Documental_model extends CI_Model{
    
    public function get_documentales(){
        
        
        $this->load->database();
        $this->db->select('documentales.ID as documentalID' );
        $this->db->select('documentales.tituloOriginal as documentalTituloOriginal' );
        $this->db->select('documentales.estreno as documentalEstreno' );
        $this->db->select('documentales.año as documentalTituloAño' );
        $this->db->select('documentales.duracion as documentalDuracion' );
        $this->db->select('documentales.sinopsis as documentalSinopsis' );
        $this->db->select('documentales.trailer as documentalTrailer' );
        $this->db->select('documentales.idPais as documentalidPais' );
        $this->db->select('pais.ID as paisId' );
        $this->db->select('pais.nombre as paisNombre' );
        
        

        
                
        
        
        
        $this->db->join('pais', 'pais.ID = documentales.idPais');
        $query=$this->db->get('documentales');//sentencia de ejecucion 
        return $query->result_array();// se retorna el resutlado como un arreglo 
    }
    
    public function crear($data){
        $this->load->database();
        $this->db->insert('documentales',$data);
        return $this->db->insert_id();//me entrega  el ultimo id insertado 
        
        
    }
    
    public function eliminar($id){
        $this->load->database();
        $this->db->where('id', $id);
        $this->db->delete('documentales');  
    }
    
    public function consultar($id){
        $this->load->database();
        $this->db->where('id', $id);
        $this->db->select('tituloOriginal');
        $query=$this->db->get('documentales');
        return $query->row_array();
    }
    
    public function editar($id, $arreglo){
        
        $this->load->database();
        $this->db->update('documentales', $arreglo, "id =".$id);
        
    }
    
    public function grafica(){
        
        $this->load->database();
        $this->db->select('count(documentales.ID) as totalDocumentales' );//count(documentales.ID)= cuenta cuantos documentales hay y saca un numero
        $this->db->select('pais.nombre as nombrePais' );
        $this->db->group_by('documentales.idPais' );//y como lo estamos agrupando cuenta los documentales que hay por cada pais 
        $this->db->join('pais', 'documentales.idPais = pais.id');
        
        $query=$this->db->get('documentales');//sentencia de ejecucion 
        return $query->result_array();// se retorna el resutlado como un arreglo 
        
    }
    
    
}
?>