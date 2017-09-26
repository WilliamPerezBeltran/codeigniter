<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class controladorPrueba extends CI_Controller {

    public function paginaPrincipal() {

        $this->load->library('form_validation');
        $this->form_validation->set_rules('foto', 'foto');
        $this->form_validation->set_rules('nombre', 'nombre', 'required');
        $this->form_validation->set_rules('tipo', 'tipo', 'required');
        $this->form_validation->set_rules('ciudad', 'ciudad', 'required');
        $this->form_validation->set_rules('departamento', 'departamento', 'required');

        if ($_FILES){
        $nameFoto = $_FILES['foto']['name'];
        $extensionFoto = explode(".", $nameFoto);
}

        if ($this->form_validation->run()) {
            echo 'estamos dentro ';
            $this->load->library('upload');
            //carga la foto)
            $config['upload_path'] = 'public/foto/';
            $config['allowed_types'] = 'jpg|png|jpeg|gif';
            $archivo = date('YmdHis');
            $config['file_name'] = 'foto' . $archivo . '.' . $extensionFoto[1];
            $config['file_ext_tolower'] = true;
            $this->upload->do_upload('foto');





            $data['nombre'] = $this->input->post('nombre');
            $data['tipo'] = $this->input->post('tipo');
            $data['ciudad'] = $this->input->post('ciudad');
            $data['fecha'] = $this->input->post('fecha');
            $data['departamento'] = $this->input->post('departamento');
            $data['foto'] = $config['file_name'];
            $this->load->model('modelPrincipal_model');
            $this->modelPrincipal_model->insertar($data);

            var_dump($data);
         
            redirect('ControladorUsuario/controladorPrincipal/experienciaLaboralProfe');
        }

        //trae tipo de la database
        $this->load->model('tipo_model');
        $info['tipo'] = $this->tipo_model->getTipo();
        //trae ciudades de la database
        $this->load->model('ciudades_model');
        $info['ciudades'] = $this->ciudades_model->getCiudades();
        //trae departamentos de la database
        $this->load->model('departamento_model');
        $info['departamentos'] = $this->departamento_model->getDepartamento();


        $this->load->view('templates/header');
        $this->load->view('templates/aside');
        $this->load->view('paginaPrincipal', $info);
        $this->load->view('templates/footer');
    }

}
