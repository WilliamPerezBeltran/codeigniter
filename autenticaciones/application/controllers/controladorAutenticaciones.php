<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class controladorAutenticaciones extends Auth_Controller {//cambiamos el CI_Controller por MY_Controller

    public function __construct() {
        parent::__construct();
        $this->load->library('session');
    }

    public function crear() {
        $this->load->library('form_validation');
        $this->load->library('session');
        $this->form_validation->set_rules('nombre', 'nombre', 'required');
        $this->form_validation->set_rules('correo', 'correo', 'required');
        $this->form_validation->set_rules('cel', 'cel', 'required');
        $this->form_validation->set_rules('pasword', 'pasword', 'required');
        //verifico que llegan las variables de sesiones 
        //echo $this->session->userdata('usuario');
        //echo $this->session->userdata('idusuario');
        //echo $this->session->userdata('nombre');
        //echo $this->session->userdata('foto');
        //die;

        $data['idusuario'] = $this->session->userdata('idusuario');
        $variable = $this->session->userdata('otravariable');

        if ($this->form_validation->run()) {
            $config['upload_path'] = './public/imagenes/usuarios/'; //el path en donde guarda las fotos 
            $config['allowed_types'] = 'jpg|png|jpeg|gif'; //el tipo de archivos que permite 
            $archivo = date('YmdHis'); //muestra la hora conque fue cogido el archivo
            $config['file_name'] = 'foto' . $archivo;
            $config['file_ext_tolower'] = true;
            $this->load->library('upload', $config); //carga la libreria upload(que es la que permite guardar archivos con codeigniter) 
            //pasandole los parametros upload_path y allowed_types

            if ($this->upload->do_upload('foto')) {//el archivo que viene del input foto de tipo file lo guarda fisicamente y retorna true o false 
                //si es verdadero 
                //  el objeto upload tiene una propiedad que se llama do_upload(guarda fisicamente el archivo ) 
                //  y data()
                //file_name= saca el nombre del archov con que quedo grabado                
                $foto_name = $this->upload->data('file_name'); //es el nombre del archivo con que quedo grabado (el nombre del archivo con que viene )             
            } else {
//                echo $this->upload->display_errors(); muestra los errores si no puede salvar el archivo 
                $foto_name = 'defaultuser.PNG';
            }
            $data['nombre'] = $this->input->post('nombre');
            $data['correo'] = $this->input->post('correo');
            $data['cel'] = $this->input->post('cel');
            $data['pasword'] = md5($this->input->post('pasword')); //
            $data['foto'] = $foto_name;
            $this->load->model('autenticaciones_model');
            $this->autenticaciones_model->insertar($data);
            redirect('controladorAutenticaciones/crear');
        }
        //$this->load->view('seguridad');se quita esta vista ya que el constructor lo reemplaza
        $this->load->view('template/header');
        $this->load->view('template/aside');
        $this->load->view('crear');
        $this->load->view('template/footer');
    }

    public function listar() {
        $this->load->model('autenticaciones_model');
        $data['info'] = $this->autenticaciones_model->listar();
        //$this->load->view('seguridad');se quita esta vista ya que el constructor lo reemplaza
        $this->load->view('template/header');
        $this->load->view('template/aside');
        $this->load->view('listar', $data);
        $this->load->view('template/footer');
    }

    public function eliminar($id) {
        $this->load->model('autenticaciones_model');
        $this->autenticaciones_model->eliminar($id);
        redirect('controladorAutenticaciones/listar');
    }

    public function editar() {
        $this->load->library('form_validation');
        $this->load->view('template/header');
        $this->load->view('template/aside');
        $this->load->view('crear');
        $this->load->view('template/footer');
    }

    public function salir() {
        $this->load->library('session');

        $this->session->sess_destroy();
        redirect('/', 'location', 301);
    }

}

?>