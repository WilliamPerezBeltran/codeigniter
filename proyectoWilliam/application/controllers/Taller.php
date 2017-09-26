<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Taller extends CI_Controller{
    
    public function inicio(){
        $info['nombre']='william';
        $info['edad']=56;
        
        $this->load->model('city_model');
        $info['ciudades']=$this->city_model->consultar();
        $this->load->view('inicio',$info);
    }
}
?>
