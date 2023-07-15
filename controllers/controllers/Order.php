<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Order extends CI_Controller {

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
	public function order()
	{		
		$this->load->model('m_travelin2');
        $data['travelin']=$this->m_travelin2->get_data();
        $this->load->view('order_admin', $data);	
	}

	public function delData(){
		$id=$this->input->post('idDel');
		$this->load->model('m_travelin1');
		if($this->m_travelin1->delOrder($id)){
			return redirect('Order');
		}else{
			var_dump($id);

		}
	}
    public function search()
    {
        $search = $this->input->post('search');
        $this->load->model('m_travelin2');
        $hasil = $this->m_travelin2->search($search);
        if ($hasil) {
            $this->session->set_flashdata('hasil', $hasil);
            return redirect('Order');
        } else {
            echo 'search gagal';
		}
	}
}
