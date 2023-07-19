<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Jadwal extends CI_Controller {

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
	public function jadwal()
	{		
		$this->load->model('m_travelin1');
        $data['travelin']=$this->m_travelin1->get_data();
        // var_dump($data['travelin']);
        $this->load->view('jadwal_admin', $data);	
	}

	public function delJadwal(){
        $id=$this->input->post('idJadwal');
		$this->load->model('m_travelin1');
		if($this->m_travelin1->delJadwal($id)){
			return redirect('Jadwal');
		} else {
            var_dump($id);
        }
	}

	public function tambahJadwal(){
		$data = [
			'kdJadwal'	=> $this->input->post('kdJadwal'),
			'kdBis'	=> $this->input->post('kdBis'),
			'asal'	=> $this->input->post('asal'),
			'tujuan'	=> $this->input->post('tujuan'),
			'harga'	=> $this->input->post('harga'),
			'jamBerangkat'	=> $this->input->post('jamBerangkat'),
			'jamDatang'	=> $this->input->post('jamDatang'),
			'terminalAsal'	=> $this->input->post('terminalAsal'),
			'terminalTujuan'	=> $this->input->post('terminalTujuan'),
		];
		$this->load->model('m_travelin1');
		if ($this->m_travelin1->insertJadwal("jadwal_bus", $data)){
			return redirect('Jadwal');
		}
    }
	public function editJadwal(){
		$kdJadwal	= $this->input->post('btnKd');
		var_dump($kdJadwal);
		$data = [
			// 'kd_jadwal'	=> $this->input->post('kdJadwal'),
			'kd_bis'	=> $this->input->post('kdBis'),
			'asal'	=> $this->input->post('asal'),
			'tujuan'	=> $this->input->post('tujuan'),
			'harga'	=> $this->input->post('harga'),
			'jamBerangkat'	=> $this->input->post('jamBerangkat'),
			'jamDatang'	=> $this->input->post('jamDatang'),
			'terminalAwal'	=> $this->input->post('terminalAsal'),
			'terminalTujuan'	=> $this->input->post('terminalTujuan'),
		];
		// var_dump($this->input->post());
		$this->load->model('m_travelin1');
		if ($this->m_travelin1->editJadwal($kdJadwal,$data)){
			return redirect('Jadwal');
		}
    }

}