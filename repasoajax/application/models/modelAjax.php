<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class modelAjax extends CI_Model {

    public function get_informacion() {
        $this->load->database();
        $this->db->select('informacion.ID as idInformacion');
        $this->db->select('informacion.nombre as informacionnombre');
        $this->db->select('informacion.apellido as informacionapellido');
        $this->db->select('informacion.celular as informacioncelular');
        $this->db->select('informacion.opinion as informacionopinion');
        $this->db->select('informacion.gustos as informaciongustos');
        $this->db->select('informacion.idPais as informacionidPais');
        $this->db->select('informacion.idPeliculas as informacionidPeliculas');
        $this->db->select('informacion.password as informacionpassword');
        $this->db->select('informacion.email as informacionemail');

        $this->db->select('pais.ID as idPais');
        $this->db->select('pais.nombrePais as paisnombrePais');

        $this->db->select('pelicula.ID as idPelicula');
        $this->db->select('pelicula.nombrePelicula as peliculanombrePelicula');

        $this->db->join('pais', 'pais.ID = informacion.idPais');
        $this->db->join('pelicula', 'pelicula.ID = informacion.idPeliculas');


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
    
    public function getInfoLogin($pPassword,$pEmail) {
        $this->load->database();
        $this->db->where('password',$pPassword);
        $this->db->where('email',$pEmail);
        $query=$this->db->get('informacion');
        return $query->result_array();
    }
    
    public function TraerFilaAjaxAleatorio($id) {
        $this->load->database();
        $this->db->where('id',$id);
        $query=$this->db->get('informacion');
        
        return $query->row_array();
    }
    
    public function traerId() {
        $this->load->database();
         $this->db->select('informacion.ID ');
        $query=$this->db->get('informacion');
        return $query->result_array();     
    }

}

?>