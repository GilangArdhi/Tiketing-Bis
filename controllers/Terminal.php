<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Terminal extends CI_Controller {

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
	public function terminal()
	{		
		$this->load->model('m_travelin2');
        $data['travelin']=$this->m_travelin2->get_data2();
        $this->load->view('terminal_admin', $data);	
	}

	public function delTerminal(){
		$id=$this->input->post('idTerminal');
		$this->load->model('m_travelin1');
		if($this->m_travelin1->delTerminal($id)){
			return redirect('Terminal');
		}else{
			var_dump($id);

		}
	}
	public function tambahTerminal(){
		$data = [
			'idTerminal'	=> $this->input->post('idTerminal'),
			'nama'	=> $this->input->post('nama'),
			'alamat'	=> $this->input->post('alamat'),
		];
		$this->load->model('m_travelin1');
		if ($this->m_travelin1->insertTerminal("terminal", $data)){
			return redirect('Terminal');
		}
    }
	public function editTerminal(){
		$id	= $this->input->post('btnKd');
		var_dump($id);
		$data = [
			// 'kd_jadwal'	=> $this->input->post('kdJadwal'),
			'nama_tml'	=> $this->input->post('nama'),
			'alamat_tml'	=> $this->input->post('alamat'),
		];
		// var_dump($this->input->post());
		$this->load->model('m_travelin1');
		if ($this->m_travelin1->editTerminal($id,$data)){
			return redirect('Terminal');
		}
    }
}
