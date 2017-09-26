<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class graficasControlador extends CI_Controller {
    
    public function verGrafica(){
        $this->load->model('Graficas_model');
        $info['infoall']=$this->Graficas_model->getregion();
        //print_r($info);
        $info['titulo']='South America';
        $this->load->view('template/header');
        $this->load->view('template/aside');
        $this->load->view('plantilla',$info);
        $this->load->view('template/footer');
    }
    
    public function cambmiarGrafica($continent){

        $quitarEspacioContinent=str_replace("%20", " ", $continent);// Replace the characters "%20" in the string "North america(que es una variable que se llama contienent)" with " ":   
        //str_replace("lo que busco", " lo que quiero poner  ", a lo que quiero cambiar )
        $this->load->model('Graficas_model');
        $info['infoall']=$this->Graficas_model->cambioGrafica($quitarEspacioContinent);
        $info['titulo']=$quitarEspacioContinent;
        //var_dump($info['info']);die;
        
        $this->load->view('template/header');
        $this->load->view('template/aside');
        $this->load->view('plantilla',$info);
        $this->load->view('template/footer');
    }
    

 
}
?>     

