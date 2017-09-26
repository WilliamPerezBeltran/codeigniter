<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Documentales extends CI_Controller {

   
    public function verdocumentales() {//cargando el modelo city 
        
        $this->load->model('documental_model');
        
        //consulta las ciudades
        $data['documentales'] = $this->documental_model->get_documentales();
        $this->load->view('template/header');
        $this->load->view('template/aside');
        $this->load->view('listarDocumentales', $data);
        $this->load->view('template/footer');
    }

    public function vercrear() {

        $this->load->library('form_validation');
        $this->form_validation->set_rules('titulo', 'Titulo', 'required');
        $this->form_validation->set_rules('estreno', 'estreno', 'required');
        $this->form_validation->set_rules('año', 'año', 'required|numeric');
        $this->form_validation->set_rules('duracion', 'duracion', 'required');
        $this->form_validation->set_rules('Sinopsis', 'Sinopsis', 'required');
        $this->form_validation->set_rules('trailer', 'trailer', 'required');
        $this->form_validation->set_rules('idPais', 'pais', 'required');
        $this->form_validation->set_rules('idactores[]', 'actor', 'required');// en idactores hay que ponerle [] porque este parametro es un arreglo         
        //buscando la informacion de paises 
        $this->load->model('Paises_model');
        $info['paises']=$this->Paises_model->buscarpaises();
        //buscando los actores 
        $this->load->model('Actores_model');
        $info['actores']=$this->Actores_model->getActores();
        
        if ($this->form_validation->run()) {
            $data['tituloOriginal'] = $this->input->post('titulo');
            $data['estreno'] = $this->input->post('estreno');
            $data['año'] = $this->input->post('año');
            $data['duracion'] = $this->input->post('duracion');
            $data['sinopsis'] = $this->input->post('Sinopsis');
            $data['trailer'] = $this->input->post('trailer');
            $data['trailer'] = $this->input->post('trailer');
            $data['idPais'] = $this->input->post('idPais');
            $actores = $this->input->post('idactores');// LA VARIABLE $ACTORES LLEGA COMO UN ARREGLO DE ACTORES 
            //var_dump($actores);die;                   
            $this->load->model('documental_model');
            $idDocumental=$this->documental_model->crear($data);            
            $this->load->model('documentales_actores_Model');
            
            
            foreach ($actores as $actor ){
                $datos['idActores']=$actor;
                $datos['idDocumentales']=$idDocumental;
                $this->documentales_actores_Model->insertar($datos);
            }
            
            //for($i=0;$i<count($actores);$i++){ // este codigo es lo mismo de lo que esta arriba 
            //    $datos['idActores']=$actores[$i];
            //    $datos['idDocumentales']=$idDocumental;
            //    $this->documentales_actores_Model->insertar($datos);
            //  }
            
            redirect('documentales/vercrear');
        }


        $this->load->view('template/header');
        $this->load->view('template/aside');
        $this->load->view('crear',$info);
        $this->load->view('template/footer');
    }

    public function eliminar($id) {
        $this->load->model('documental_model');
        $this->load->model('Documental_model');
        $this->Documental_model->eliminar($id);
        redirect('Documentales/verdocumentales');
    }

    public function editar($id) {
        $this->load->library('form_validation');
        $this->form_validation->set_rules('titulo', 'titulo', 'required');
        $this->form_validation->set_rules('estreno', 'estreno', 'required');
        $this->form_validation->set_rules('año', 'año', 'required|numeric');
        $this->form_validation->set_rules('duracion', 'duracion', 'required');
        $this->form_validation->set_rules('Sinopsis', 'Sinopsis', 'required');
        $this->form_validation->set_rules('trailer', 'trailer', 'required');
        if ($this->form_validation->run()) {
            
            
            
            
            $data['tituloOriginal'] = $this->input->post('titulo');
            $data['estreno'] = $this->input->post('estreno');
            $data['año'] = $this->input->post('año');
            $data['duracion'] = $this->input->post('duracion');
            $data['sinopsis'] = $this->input->post('Sinopsis');
            $data['trailer'] = $this->input->post('trailer');
            $data['idPais'] = $this->input->post('idPais');
            
            
            $this->load->model('Paises_model');
            $datapaises['paises']=$this->Paises_model->buscarpaises();
            $this->load->model('documental_model');
            $this->documental_model->editar($id,$data);
            redirect('documentales/verdocumentales');
        } else {
            
            $this->load->model('Paises_model');
            $info['paises'] =$this->Paises_model->buscarpaises();
            
            $this->load->model('Actores_model');
            $info['actores']=$this->Actores_model->getActores();
            
            $this->load->model('documentales_actores_Model');
            $arregloActores=$this->documentales_actores_Model->getActoresByIdDocumental($id);
            
           //echo '<pre>'; miro lo que traigo de getActoresByIdDocumental($id)
           //var_dump ($arregloActores);
           //echo '</pre>' ;die;
           
            foreach ($arregloActores as $arregloActoresById){
                $arregloIdSelecionados[]=$arregloActoresById['idActores'];
            }
            //echo '<pre>'; miro lo que traigo de $arregloIdSelecionados 
           //var_dump ($arregloIdSelecionados);
           //echo '</pre>' ;die;
            $info['arregloseleccionados']=$arregloIdSelecionados;

            $this->load->model('documental_model');
            $info['documental'] = $this->documental_model->consultar($id);
            $this->load->view('template/header');
            $this->load->view('template/aside');
            $this->load->view('editar', $info);
            $this->load->view('template/footer');
        }
    }
    public function ejemploAjax() {//cargando el modelo city 
        
       echo json_encode("hola william ");//
    }
    
    public function nombreDelDocumentalAjax($id) {
        $this->load->model('documental_model');
        $data=$this->documental_model->consultar($id);
        
       
       echo json_encode($data['tituloOriginal']);
    }
    
     public function grafica() {
         $this->load->model('documental_model');
        $data['informacion']=$this->documental_model->grafica();        
        $this->load->view('grafica',$data);      
    }
    
    public function maratonDeProgramacion() {
        
        $this->load->model('documental_model');
        
        //consulta las ciudades
        $data['documentales'] = $this->documental_model->get_documentales();
        $this->load->view('template/header');
        $this->load->view('template/aside');
        $this->load->view('vistaMaratonDeProgramacion', $data);
        $this->load->view('template/footer');
    }
   
    //cuantas pelicualas hay por cada pais 
}
?>     

