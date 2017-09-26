<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Datos extends Auth_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->library('session');
    }

    public function listar() {
        //si quiero ver las variables de sesion puedo cargalo en donde quiera ya que son varibles de  aplicacion 
        //$this->load->library('session');
        //echo $this->session->userdata('foto');
        //die;
        $this->load->model('Miprimercrud_model');
        $info['informacion'] = $this->Miprimercrud_model->get_informacion();
        //var_dump($info['informacion']);die;
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
        $this->form_validation->set_rules('correo', 'correo', 'required');
        $this->form_validation->set_rules('pasword', 'pasword', 'required');
        if (empty($_FILES['foto']['name'])) {
            $this->form_validation->set_rules('foto', 'foto', 'required');
        }


        if ($this->form_validation->run()) {
            //var_dump($_FILES); die;//$_FILES= es un arreglo que crea php automaticamente que contiene la informacion de la foto subida (en este caso es la informacion de la foto en otro podria ser otro )
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
            $data['correo'] = $this->input->post('correo');
            $data['pasword'] = md5($this->input->post('pasword'));
            $data['foto'] = $foto_name;

            $this->load->model('Miprimercrud_model');
            $this->Miprimercrud_model->crear($data);
            redirect('Datos/listar');
        } else {


            $this->load->view('templates/header');
            $this->load->view('templates/aside');
            $this->load->view('crear');
            $this->load->view('templates/footer');
        }
    }

    public function editar($id) {

        $this->load->library('form_validation');
        $this->form_validation->set_rules('nombre', 'nombre', 'required');
        $this->form_validation->set_rules('correo', 'correo', 'required');
        $this->form_validation->set_rules('pasword', 'pasword', 'required');
        $this->form_validation->set_rules('foto', 'foto', 'required');
        if ($this->form_validation->run()) {
            $data['nombre'] = $this->input->post('nombre');
            $data['correo'] = $this->input->post('correo');
            $data['pasword'] = $this->input->post('pasword');
            $data['foto'] = $this->input->post('foto');

            $this->load->model('Miprimercrud_model');
            $this->Miprimercrud_model->editar($id, $data);
            redirect('Datos/listar');
        } else {
            $this->load->model('Miprimercrud_model');
            $info['informa'] = $this->Miprimercrud_model->consultar($id);


            $this->load->view('templates/header');
            $this->load->view('templates/aside');
            $this->load->view('editar', $info);
            $this->load->view('templates/footer');
        }
    }

    public function salir() {
        $this->load->library('session');
        $this->session->sess_destroy();
        redirect('/', 'location', 301);
    }

}
