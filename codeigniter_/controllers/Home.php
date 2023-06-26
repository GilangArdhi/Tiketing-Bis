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
        redirect('final_project/PHP/pilihKursi');
    }
    public function profil()
    {
        $this->load->view('final_project/PHP/profil');
    }
    public function editProfil()
    {
        $this->load->view('final_project/PHP/editProfil');
    }
    // public function __construct()
    // {
    //     parent::__construct();
    //     $this->load->library('form_validation');
        
    //     $this->load->library('javascript/jquery');
    // }
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

            $this->session->set_userdata('userData', $userData);
        } else {
            $this->load->view('final_project/PHP/login');
        }
    }

    public function filter()
    {
        $userData = $this->session->userdata('userData');
        $objFilter = [
            'kotaAsal' => $this->input->post('asalKota'),
            'tujuanKota' => $this->input->post('kotaTujuan'),
            'tglBerangkat' => $this->input->post('tglBerangkat'),
            'tglPulang' => $this->input->post('tglPulang'),
            'jmlPenumpang' => $this->input->post('jmlPenumpang')
        ];
        $kotaAsal = $this->input->post('asalKota');
        $kotaTujuan = $this->input->post('kotaTujuan');
        $this->load->model('Database');
        $dbBis['jadwal_bis'] = $this->Database->dataBis($kotaAsal, $kotaTujuan);
        if ($dbBis['jadwal_bis']) {
            // $dataBis = $dbBis['jadwal_bis'];
            // print_r($dbBis['jadwal_bis']);
            $this->session->set_userdata('objFilter', $objFilter);
            $this->load->view('final_project/PHP/pilihBis', array('userData' => $userData, 'objFilter' => $objFilter, 'jadwal_bis' => $dbBis['jadwal_bis']));
        }

        // $this->load->view('final_project/PHP/pilihBis', array('userData' => $userData, 'objFilter' => $objFilter));

    }

    public function dataPilihBis()
    {
        $userData = $this->session->userdata('userData');
        $objFilter = $this->session->userdata('objFilter');

        var_dump($this->input->post());//die;
        // $jamBerangkat = $this->input->post('jamBerangkat');
        $dataBis = [
            // 'logo' => $this->input->post('logoBis'),
            'jamBerangkat' => $this->input->post('jamKeberangkatan'),
            'terminalAwal' => $this->input->post('terminalAwal'),
            'durasi' => $this->input->post('durasi'),
            'jamDatang' => $this->input->post('jamDatang'),
            'terminalTujuan' => $this->input->post('terminalTujuan'),
            'kelas' => $this->input->post('kelas'),
            'hargaTiket' => $this->input->post('hargaTiket')
        ];
        if ($dataBis != null){
            $this->session->set_userdata('dataBis', $dataBis);
            // echo json_encode($jamBerangkat);// print_r($dataBis);
            // echo json_encode($dataBis);// 
            // print_r($dataBis);
            $this->load->view('final_project/PHP/pilihKursi', array('userData' => $userData, 'objFilter' => $objFilter, 'dataBis' => $dataBis));
        }

    }

}