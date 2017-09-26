<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Datos extends CI_Controller {

    public function listar() {
        $this->load->model('Miprimercrud_model');
        $info['informacion'] = $this->Miprimercrud_model->get_informacion();
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




        if ($this->form_validation->run()) {
            $data['nombre'] = $this->input->post('nombre');
            $data['apellido'] = $this->input->post('apellido');
            $data['celular'] = $this->input->post('celular');
            $data['opinion'] = $this->input->post('opinion');
            $data['gustos'] = $this->input->post('gustos');
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
            $this->load->view('crear',$info);
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
        if ($this->form_validation->run()) {
            $data['nombre'] = $this->input->post('nombre');
            $data['apellido'] = $this->input->post('apellido');
            $data['celular'] = $this->input->post('celular');
            $data['opinion'] = $this->input->post('opinion');
            $data['gustos'] = $this->input->post('gustos');
            $this->load->model('Miprimercrud_model');
            $this->Miprimercrud_model->editar($id, $data);
            redirect('Datos/listar');
        } else {
            $this->load->model('Miprimercrud_model');
            $info['informa'] = $this->Miprimercrud_model->consultar($id);
            $info['id'] = $id;
            $this->load->view('templates/header');
            $this->load->view('templates/aside');
            $this->load->view('editar', $info);
            $this->load->view('templates/footer');
        }
    }

}
