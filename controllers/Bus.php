<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Bus extends CI_Controller
{

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
	public function bus()
	{
		$this->load->model('m_travelin2');
		$data['travelin'] = $this->m_travelin2->get_data3();
		$this->load->view('bus_admin', $data);
	}

	public function delBus()
	{
		$id = $this->input->post('idBus');
		$this->load->model('m_travelin1');
		if ($this->m_travelin1->delBus($id)) {
			return redirect('Bus');
		} else {
			var_dump($id);

		}
	}
	public function tambahBus()
	{
		// Mengatur konfigurasi untuk upload gambar
        $config['upload_path']   = './assets/';
        $config['allowed_types'] = 'gif|jpg|jpeg|png';
        $config['max_size']      = 2048; // dalam kilobita
		
        $this->load->library('upload', $config);
		
        if ($this->upload->do_upload('logo')) {
			$upload_data = $this->upload->data();
            $bus_image = $upload_data['file_name'];
			$data = [
				'kdBis' => $this->input->post('kdBis'),
				'logo' => $bus_image,
				'nama' => $this->input->post('nama'),
				'kapasitas' => $this->input->post('kapasitas'),
				'kelas' => $this->input->post('kelas'),
				'plat' => $this->input->post('platNo'),
			];
			
            // Simpan data bus ke dalam database
            // $this->bus_model->save_bus($bus_name, $bus_image);
			$this->load->model('m_travelin1');
			if ($this->m_travelin1->insertBus("bus", $data)) {
				return redirect('Bus');
			}

            redirect('bus/input');
        } else {
            $error = $this->upload->display_errors();
            echo $error;
        }
		$this->load->model('m_travelin1');
	}
	public function editBus()
	{
		$kdBis = $this->input->post('btnKd');
		var_dump($kdBis);
		$data = [
			'logo' => $this->input->post('logo'),
			'nama' => $this->input->post('nama'),
			'kapasitas' => $this->input->post('kapasitas'),
			'kelas' => $this->input->post('kelas'),
			'plat' => $this->input->post('plat'),
		];
		// var_dump($this->input->post());
		$this->load->model('m_travelin1');
		if ($this->m_travelin1->editBus($kdBis, $data)) {
			return redirect('Bus');
		}
	}
}