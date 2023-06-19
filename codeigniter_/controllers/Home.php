<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
{
    public function index()
    {
        $this->load->view('final_project/PHP/daftar');
    }

    public function daftar()
    {
        $this->load->view('final_project/PHP/halamanUtama');
    }
    public function login()
    {
        $this->load->view('final_project/PHP/login');
    }
    public function pilihBis()
    {
        $this->load->view('final_project/PHP/pilihBis');
    }
    public function pilihKursi()
    {
        $this->load->view('final_project/PHP/pilihKursi');
    }
    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
    }
    public function pendaftaran()
    {
        // $this->load->library('form_validation');
        $this->form_validation->set_rules('txtnama', 'Nama', 'required');
        $this->form_validation->set_rules('inputEmail', 'Email', 'required');
        $this->form_validation->set_rules('inputPass', 'Password', 'required|min_length[6]');
        $this->form_validation->set_rules('konfirmasiPass', 'Confirmation Password', 'matches[inputPass]');

        $data = [
            'email' => $this->input->post('inputEmail'),
            'nama' => $this->input->post('txtnama'),
            'password' => $this->input->post('inputPass'),
            // 'konfirmasiPass' => $this->input->post('konfirmasiPass'),
        ];

        if ($this->form_validation->run() != FALSE) {
            $this->load->model('Database');

            if ($this->Database->insert_data('users', $data)) {
                $dataTable['users'] = $this->Database->emailLogin($data['email'], $data['password']);
                if ($dataTable['users']) {
                    $userData = $dataTable['users'];
                    $this->load->view('final_project/PHP/halamanUtama', array('userData' => $userData));
                } else {
                    $this->load->view('final_project/PHP/daftar');
                }
            } else {
                $this->load->view('final_project/PHP/daftar');
            }

        } else {
            $this->load->view('final_project/PHP/daftar');
        }

    }

    public function userLogin()
    {
        $this->form_validation->set_rules('inputEmail', 'Email', 'required');
        $this->form_validation->set_rules('inputPass', 'Password', 'required');

        $email = $this->input->post('inputEmail');
        $password = $this->input->post('inputPass');
        $this->load->model('Database');
        $dataTable['users'] = $this->Database->emailLogin($email, $password);
        if ($dataTable['users']) {
            $userData = $dataTable['users'];
            // Cetak data pengguna
            // print_r($userData);
            $this->load->view('final_project/PHP/halamanUtama', array('userData' => $userData));
        } else {
            $this->load->view('final_project/PHP/login');
        }

    }

    public function filter(){
        $objFilter = [
            'kotaAsal' => $this->input->post('asalKota'),
            'kotaTujuan' => $this->input->post('kotaTujuan'),
            'tglBerangkat' => $this->input->post('tglBerangkat'),
            'tglPulang' => $this->input->post('tglPulang'),
            'jmlPenumpang' => $this->input->post('jmlPenumpang')
        ];

        $this->load->view('final_project/PHP/pilihBis', $objFilter);
    }
}