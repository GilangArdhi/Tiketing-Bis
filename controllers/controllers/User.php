<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/userguide3/general/urls.html
	 */
	public function user()
	{		
		$this->load->model('m_travelin2');
        $data['travelin']=$this->m_travelin2->get_data1();
        $this->load->view('user_admin', $data);	
	}

	public function delUser(){
		$id=$this->input->post('idUser');
		$this->load->model('m_travelin1');
		if($this->m_travelin1->delUser($id)){
			return redirect('User');
		}else{
			var_dump($id);

		}
	}
}
