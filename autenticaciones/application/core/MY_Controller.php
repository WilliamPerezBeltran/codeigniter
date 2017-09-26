<?php
//SE CREA ESTE CONSTRUCTOR EN APPLICATION/CORE/MY_Controller.php(tiene que llamarse por convencion exactamente igual MY_Controller respetando las mayusculas y minusculas )
class Auth_Controller extends CI_Controller{
    
    function __construct(){//las constructoras de codeignitar 
        parent::__construct();
        $this->load->library('session');
       if(!$this->session->userdata('usuario')){//valida si la session existe o no 
            redirect('/','location',301);
        }
    }
}
?>