<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

    /**
     * Index Page for this controller.
     *
     * Maps to the following URL
     * 		http://example.com/index.php/welcome
     * 	- or -
     * 		http://example.com/index.php/welcome/index
     * 	- or -
     * Since this controller is set as the default controller in
     * config/routes.php, it's displayed at http://example.com/
     *
     * So any other public methods not prefixed with an underscore will
     * map to /index.php/welcome/<method_name>
     * @see https://codeigniter.com/user_guide/general/urls.html
     */
    public function index() {
        $this->load->library('form_validation');
        $this->load->library('session');
        $this->form_validation->set_rules('correo', 'correo', 'required');
        $this->form_validation->set_rules('pasword', 'pasword', 'required');
       $data['error']=0;
        if ($this->form_validation->run()) {
            $data['correo'] = $this->input->post('correo');
            $data['pasword'] = md5($this->input->post('pasword'));
            $this->load->model('Miprimercrud_model');
            $info = $this->Miprimercrud_model->ConsultarDatosLogin($data['correo'], $data['pasword']);
            //echo '<pre>';
            //var_dump($info);echo '</pre>';die;
            $confirmacion=count($info);
            if($confirmacion==1){
                //creando variables de Session.
                $this->session->set_userdata(array('usuario' => TRUE,
                'idusuario' => $info[0]['id'],
                'nombre' => $info[0]['nombre'],
                'foto' => $info[0]['foto']));
                redirect('Datos/listar'); 
           }else{
              $data['error']=1;
           }
            
        } else {
            $this->load->view('login',$data);
        }



        
    }

}
