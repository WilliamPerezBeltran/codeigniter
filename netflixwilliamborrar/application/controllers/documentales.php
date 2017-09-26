<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Documentales extends CI_Controller {

   
    public function verdocumentales() {  
        $this->load->model('Documental_model');
        $info=$this->Documental_model->get_documentales();
        echo '<pre>';
        var_dump($info);die;
        echo '</pre>';
        $this->load->view('template/header');
        $this->load->view('template/aside');
        $this->load->view('plantilla');
        $this->load->view('template/footer');
    }
    
    public function eliminar() {  
        
        
    }
    
    public function crear() {  
       
                 
        
    }

   

}
?>     

