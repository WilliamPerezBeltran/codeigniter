<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class controllerAjax extends Auth_Controller {

    public function crearArchivo() {

        $this->load->library('form_validation');
        $this->form_validation->set_rules('nombre', 'nombre', 'required');
        if (empty($_FILES['foto']['name'])) {
            $this->form_validation->set_rules('foto', 'foto', 'required');
        }
        if ($this->form_validation->run()) {

            $config['upload_path'] = './public/imagenes/usuarios';
            $config['allowed_types'] = 'gif|jpg|png|jpeg';
            $config['max_size'] = 100;
//            $config['max_height'] = 768;
            $this->load->library('upload', $config);
            $this->upload->do_upload('foto');
            
        }


        $this->load->view('templates/header');
        $this->load->view('templates/aside');
        $this->load->view('crear');
        $this->load->view('templates/footer');
    }
    
   
    public function ejemploAjax() {//cargando el modelo city 
        
       echo json_encode("hola william ");//
    }
     public function repasoajax() {
        $this->load->view('templates/header');
        $this->load->view('templates/aside');
        $this->load->view('repasoajax');
        $this->load->view('templates/footer');      
    }
    public function hello($fullname) {
        echo json_encode($fullname.'hola william yesid'); 
    }
    public function traerFilaAjax() {
        $this->load->model('modelAjax');
        $ids = $this->modelAjax->traerId();      
        $vectorId=rand(0,count($ids));       
        $informacionId = $ids[$vectorId]; // array(1) { ["ID"]=> string(2) "32"}    
        
        $fila=$this->modelAjax->TraerFilaAjaxAleatorio($informacionId['ID']);    
        
        echo json_encode ($fila);        
    }
    

}
