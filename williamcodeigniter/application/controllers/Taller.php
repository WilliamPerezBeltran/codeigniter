<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Taller extends CI_Controller {

	public function inicio(){
            $this->load->model('familia_model');
            $info['listar']=$this->familia_model->listar(); var_dump($info['listar']);
            $this->load->view('plantilla',$info);
	}
        
        public function crear(){
            $this->load->library('form_validation');
            $this->form_validation->set_rules('nombre','Nombre','required');
            $this->form_validation->set_rules('telefono','telefono','required');
            $this->form_validation->set_rules('celular','celular','required');
            $this->form_validation->set_rules('correo','correo','required');
            $this->form_validation->set_rules('direccion','direccion','required');
            $this->form_validation->set_rules('pasatiempo','pasatiempo','required');
            if($this->form_validation->run()){
                $info['nombre'] = $this->input->post('nombre');
                $info['telefono'] = $this->input->post('telefono');
                $info['celular'] = $this->input->post('celular');
                $info['correo'] = $this->input->post('correo');
                $info['direccion'] = $this->input->post('direccion');
                $info['pasatiempo'] = $this->input->post('pasatiempo');
                $this->load->model('familia_model');
                $this->familia_model->crear($info);
                redirect('taller/inicio');
            }
            $this->load->view('crear');         
            
	}
        
        public function eliminar($id){
            $this->load->model('familia_model');
            $this->familia_model->eliminar($id);
            redirect('taller/inicio');
            
	}
        
        public function editar($id){
            $this->load->model('familia_model');
            $info['enviar']=$this->familia_model->consultar($id);
            
            $this->load->view('editar',$info);
           
	}
}

