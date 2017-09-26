<?php
if(!$this->session->userdata('usuario')){
    redirect('/','location',301);
}
?>

