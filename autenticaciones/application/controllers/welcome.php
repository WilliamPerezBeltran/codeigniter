<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller{
    
    public function index(){
        $this->load->library('session');
        $this->load->library('form_validation');
        $this->form_validation->set_rules('email', 'email', 'required');
        $this->form_validation->set_rules('password', 'password', 'required');
        $data['error']=0;
        if($this->form_validation->run()){
            $data['email']=$this->input->post('email');
            $data['password']=md5($this->input->post('password'));            
            $this->load->model('autenticaciones_model');
            $resultado=$this->autenticaciones_model->consultar($data['email'],$data['password']);  
            //
            if(count($resultado)==1){
                //creando variables de Session.
                $this->session->set_userdata(array('usuario' => TRUE,
                'idusuario' => $resultado[0]['id'],
                'nombre' => $resultado[0]['nombre'],
                'foto' => $resultado[0]['foto']));
                redirect('controladorAutenticaciones/crear');
            }else{
                $data['error']=1;
            }            
        }        
        $this->load->view('login',$data);
    }

}
    
?>