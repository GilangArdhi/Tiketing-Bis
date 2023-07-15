<?php
class Hello extends CI_Controller{
    public function index(){
        $this->load->model('m_travelin');
        $data['travelin']=$this->m_travelin->get_data();

        $this->load->view('v_travelin', $data);
    }
}

?>