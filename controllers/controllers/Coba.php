<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Bus extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('bus_model');
    }

    public function input()
    {
        $this->load->view('coba');
    }

    public function save()
    {
        $id = $this->input->post('id');
        $bus_name = $this->input->post('bus_name');

        // Mengatur konfigurasi untuk upload gambar
        $config['upload_path']   = './uploads/';
        $config['allowed_types'] = 'gif|jpg|jpeg|png';
        $config['max_size']      = 2048; // dalam kilobita

        $this->load->library('upload', $config);

        if ($this->upload->do_upload('bus_image')) {
            $upload_data = $this->upload->data();
            $bus_image = $upload_data['file_name'];

            // Simpan data bus ke dalam database
            $this->bus_model->save_bus($id,$bus_name, $bus_image);

            redirect('bus/input');
        } else {
            $error = $this->upload->display_errors();
            echo $error;
        }
    }

}