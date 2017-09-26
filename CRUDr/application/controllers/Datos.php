<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Datos extends Auth_Controller {
    
    public function __construct() {
        parent::__construct();//echo $this->session->userdata('idusuario');die;
        $this->load->library('session');
    }

    public function listar() {
         
       //echo $this->session->userdata('usuario');
        //echo $this->session->userdata('idusuario');
        //echo $this->session->userdata('nombre');
       // echo $this->session->userdata('foto');
        
        
        var_dump($info['informacion']);
        $this->load->view('templates/header');
        $this->load->view('templates/aside');
        $this->load->view('listar', $info);
        $this->load->view('templates/footer');
        
    }

    public function eliminar($id) {
        $this->load->model('Miprimercrud_model');
        $this->Miprimercrud_model->eliminar($id);
        redirect('Datos/listar');
    }

    public function crear() {
        $this->load->library('form_validation');
        $this->form_validation->set_rules('nombre', 'nombre', 'required');
        $this->form_validation->set_rules('apellido', 'apellido', 'required');
        $this->form_validation->set_rules('celular', 'celular', 'required|numeric');
        $this->form_validation->set_rules('opinion', 'opinion', 'required');
        $this->form_validation->set_rules('gustos', 'gustos', 'required');
        $this->form_validation->set_rules('pais', 'pais', 'required');
        $this->form_validation->set_rules('pelicula', 'pelicula', 'required');
         $this->form_validation->set_rules('password', 'password', 'required');
          $this->form_validation->set_rules('email', 'email', 'required');

        if (empty($_FILES['foto']['name'])) {
            $this->form_validation->set_rules('fotos', 'fotos', 'required');
        }

        if ($this->form_validation->run()) {
            $config['upload_path'] = 'public/imagenes/usuarios';
            $config['allowed_types'] = 'jpg|png|jpeg|gif';
            $archivo = date('oFdHis');
            $config['file_name'] = 'foto' . $archivo;
            $config['file_ext_tolower'] = true;
            $this->load->library('upload', $config);
            if ($this->upload->do_upload('foto')) {
                $foto = $this->upload->data('file_name');
            }
            $data['nombre'] = $this->input->post('nombre');
            $data['apellido'] = $this->input->post('apellido');
            $data['celular'] = $this->input->post('celular');
            $data['opinion'] = $this->input->post('opinion');
            $data['gustos'] = $this->input->post('gustos');
            $data['idPais'] = $this->input->post('pais');
            $data['idPeliculas'] = $this->input->post('pelicula');
            $data['foto'] = $foto;
            $data['password'] =md5($this->input->post('password')) ;
            $data['email'] = $this->input->post('email');
            $this->load->model('Miprimercrud_model');
            $this->Miprimercrud_model->crear($data);
            redirect('Datos/listar');
        } else {
            $this->load->model('pais_model');
            $info['infoPais'] = $this->pais_model->get_informacion();
            $this->load->model('pelicula_model');
            $info['infoPelicula'] = $this->pelicula_model->get_informacion();

            $this->load->view('templates/header');
            $this->load->view('templates/aside');
            $this->load->view('crear', $info);
            $this->load->view('templates/footer');
        }
    }

    public function editar($id) {

        $this->load->library('form_validation');
        $this->form_validation->set_rules('nombre', 'nombre', 'required');
        $this->form_validation->set_rules('apellido', 'apellido', 'required');
        $this->form_validation->set_rules('celular', 'celular', 'required|numeric');
        $this->form_validation->set_rules('opinion', 'opinion', 'required');
        $this->form_validation->set_rules('gustos', 'gustos', 'required');
        $this->form_validation->set_rules('pais', 'pais', 'required');
        $this->form_validation->set_rules('pelicula', 'pelicula', 'required');
        if ($this->form_validation->run()) {
            $data['nombre'] = $this->input->post('nombre');
            $data['apellido'] = $this->input->post('apellido');
            $data['celular'] = $this->input->post('celular');
            $data['opinion'] = $this->input->post('opinion');
            $data['gustos'] = $this->input->post('gustos');
            $data['idPais'] = $this->input->post('pais');
            $data['idPeliculas'] = $this->input->post('pelicula');
            $this->load->model('Miprimercrud_model');
            $this->Miprimercrud_model->editar($id, $data);
            redirect('Datos/listar');
        } else {
            $this->load->model('pais_model');
            $info['infoPais'] = $this->pais_model->get_informacion();
            $this->load->model('pelicula_model');
            $info['infoPelicula'] = $this->pelicula_model->get_informacion();
            $this->load->model('Miprimercrud_model');
            $info['informa'] = $this->Miprimercrud_model->consultar($id);


            $this->load->view('templates/header');
            $this->load->view('templates/aside');
            $this->load->view('editar', $info);
            $this->load->view('templates/footer');
        }
    }

    public function crearArchivo() {
        $this->load->library('form_validation');
        $this->form_validation->set_rules('nombre', 'nombre', 'required');
        if (empty($_FILES['foto']['name'])) {
            $this->form_validation->set_rules('foto', 'foto', 'required');
        }

        if ($this->form_validation->run()) {
            echo '<pre>';
            var_dump($_FILES);

            echo '</pre>';
            $config['upload_path'] = 'public/imagenes/usuarios/';
            $config['allowed_types'] = 'jpg|png|jpeg|gif';
            $archivo = date('YmdHis');
            $config['file_name'] = 'foto' . $archivo;
            $config['file_ext_tolower'] = true;
            $this->load->library('upload', $config);
            if ($this->upload->do_upload('foto')) {

                $foto_name = $this->upload->data('file_name');   //This is a helper method that returns an array containing all of the data related to the file you uploaded.  y cojo el   file_name(nombre del archivo subido) y se lo guardo en la variable $foto_name        
            } else {
//                echo $this->upload->display_errors(); muestra los errores si no puede salvar el archivo 
                $foto_name = 'defaultuser.PNG';
            }

            $data['nombre'] = $this->input->post('nombre');
            $data['foto'] = $foto_name;
            $this->load->model('Miprimercrud_model');
            $this->Miprimercrud_model->crear($data);
            redirect('Datos/listar');
        }





        $this->load->view('templates/header');
        $this->load->view('templates/aside');
        $this->load->view('crearARchivo');
        $this->load->view('templates/footer');
    }
    public function salir() {
        $this->load->library('session');
        $this->session->sess_destroy();
        redirect('/', 'location', 301);
    }
    
    public function jquery() {
        $this->load->view('templates/header');
        $this->load->view('templates/aside');
        $this->load->view('vistaJquery');
        $this->load->view('templates/footer');
    }
    
    public function google_maps() {
        $this->load->model('googleChart_model');
        $info['google']=$this->googleChart_model->getInfoGoogleChart();
        
        $this->load->view('googleMaps',$info);
    }
    
    public function reto() {
       
        $this->load->view('oee');
        
    }
 public function retoListar() {
       $this->load->model('Miprimercrud_model');
        $info['informacion'] = $this->Miprimercrud_model->retoDeUna();
        $this->load->view('templates/header');
        $this->load->view('templates/aside');
        $this->load->view('retolistar',$info);
        $this->load->view('templates/footer');
        
    }
public function html() {
       
        $this->load->view('html');
        
        
    }

}
