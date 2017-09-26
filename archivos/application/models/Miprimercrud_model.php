<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Miprimercrud_model extends CI_Model {

    public function get_informacion() {
        $this->load->database();
        $query = $this->db->get('informacion');
        //echo "Real Madrid:".$this->db->last_query();
        return $query->result_array();
    }

    public function eliminar($id) {
        $this->load->database();
        $this->db->where('id', $id);
        $this->db->delete('informacion');
    }

    public function crear($data) {
        $this->load->database();
        $this->db->insert('informacion', $data);
    }

    public function consultar($id) {
        $this->load->database();
        $this->db->where('id', $id);
        $query = $this->db->get('informacion');
        return $query->row_array();
    }

    public function editar($id, $data) {
        $this->load->database();
        $this->db->update('informacion', $data, "id =" . $id);
    }
    
    public function ConsultarDatosLogin($pCorreo,$pPasword){
        $this->load->database();
       $this->db->where('correo', $pCorreo);
       $this->db->where('pasword', $pPasword);       
       $query = $this->db->get('informacion');
        return $query->result_array();
    }

}

?>