<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Taller extends CI_Controller{
    
    public function listar(){           
        $this->load->model('Familia_model');
        $info['arregloinformacion']=$this->Familia_model->get_documentales();         
        $this->load->view('template/header');
        $this->load->view('template/aside');
        $this->load->view('plantilla',$info);
        $this->load->view('template/footer');
               
	}
        
    public function eliminar($id){         
        $this->load->model('Familia_model');
        $this->Familia_model->eliminar($id);
        redirect('Taller/listar');                     
	}
        
    public function crear(){  
        
        $this->load->library('form_validation');
        $this->form_validation->set_rules('nombre', 'nombre', 'required');
        $this->form_validation->set_rules('telefono', 'telefono', 'required|numeric');
        $this->form_validation->set_rules('celular', 'celular', 'required|numeric');
        $this->form_validation->set_rules('correo', 'correo', 'required');
        $this->form_validation->set_rules('direccion', 'direccion', 'required');
        $this->form_validation->set_rules('pasatiempo', 'pasatiempo', 'required');
        $this->form_validation->set_rules('pais', 'pais', 'required');      
        
        if($this->form_validation->run()){
            $info['nombre']=$this->input->post('nombre');
            $info['telefono']=$this->input->post('telefono');
            $info['correo']=$this->input->post('correo');
            $info['celular']=$this->input->post('celular');
            $info['direccion']=$this->input->post('direccion');
            $info['pasatiempo']=$this->input->post('pasatiempo');
            $info['idPaises']=$this->input->post('pais');
            
           $this->load->model('Familia_model');
           $this->Familia_model->crear($info);
           redirect('Taller/listar');          
            }else{            
            $this->load->model('Paises_model');
            $info['pais']=$this->Paises_model->buscarpais();
            $this->load->model('Paises_model');
            $info['pais']=$this->Paises_model->buscarpais();
            $this->load->view('template/header');
            $this->load->view('template/aside');
            $this->load->view('crear',$info);
            $this->load->view('template/footer');
            
         }
                                
	}
        
        
        public function editar($id){  
            $this->load->library('form_validation');
        $this->form_validation->set_rules('nombre', 'nombre', 'required');
        $this->form_validation->set_rules('telefono', 'telefono', 'required|numeric');
        $this->form_validation->set_rules('celular', 'celular', 'required|numeric');
        $this->form_validation->set_rules('correo', 'correo', 'required');
        $this->form_validation->set_rules('direccion', 'direccion', 'required');
        $this->form_validation->set_rules('pasatiempo', 'pasatiempo', 'required');
        $this->form_validation->set_rules('paisrbd', 'pais', 'required');      
        
        if($this->form_validation->run()){
            $data['nombre']=$this->input->post('nombre');
            $data['telefono']=$this->input->post('telefono');
            $data['correo']=$this->input->post('correo');
            $data['celular']=$this->input->post('celular');
            $data['direccion']=$this->input->post('direccion');
            $data['pasatiempo']=$this->input->post('pasatiempo');
            $data['idPaises']=$this->input->post('paisrbd');
            
           $this->load->model('Familia_model');
           $this->Familia_model->actualizar($id,$data);
     
           redirect('Taller/listar');          
            }else{         
             $this->load->model('Familia_model');
            $info['getdatos']=$this->Familia_model->consultar($id);   
            
            $this->load->model('Paises_model');
            $info['pais']=$this->Paises_model->buscarpais();          
            
            $this->load->view('template/header');
            $this->load->view('template/aside');
            $this->load->view('editar',$info);
            $this->load->view('template/footer');
            
         }
        
        
        }
        
        
        
        
        
         public function javaScrip(){           
             
        $this->load->view('template/header');
        $this->load->view('template/aside');
        $this->load->view('repasoJavaScrip');
        $this->load->view('template/footer');
               
	}
        
        public function mostarPinturas(){
            
            $this->load->model('Familia_model');
             $info['oscar']=$this->Familia_model->get_pinturas();
            
            $this->load->view('template/header');
        $this->load->view('template/aside');
        $this->load->view('oscarperez',$info);
        $this->load->view('template/footer');
        }
}

?>