<?php
defined('BASEPATH')  OR exit('No direct script access allowed');
 
class Taller extends CI_Controller{
   
    
   public function plantilla(){
       $this->load->model('ciudad_model');
       $info['ciudades']=$this->ciudad_model->consultar(); 
       $this->load->view('template/header');
       $this->load->view('template/aside');
       $this->load->view('template/controlSideBar');
       $this->load->view('plantilla',$info);
   }
}


?>


