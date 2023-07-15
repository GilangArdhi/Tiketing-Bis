<?php
defined('BASEPATH') or exit('No direct script access allowed');
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require_once APPPATH . 'libraries\PHPMailer\src\PHPMailer.php';
require_once APPPATH . 'libraries\PHPMailer\src\SMTP.php';
require_once APPPATH . 'libraries\PHPMailer\src\Exception.php';
class Home extends CI_Controller
{
    public function index()
    {
        $userData = $this->session->userdata('userData');
        // if($this->session->userdata('userData')){
        //     var_dump($this->session->userdata('userData'));
        // }
        //ada@gmail.com
        if (empty($userData->email)){
            $this->load->view('userView/PHP/halamanUtama', array('userData' => $userData));
        } else if ($userData->email == 'ada@gmail.com'){
            return redirect('Admin');
        } else {
            $this->load->view('userView/PHP/halamanUtama', array('userData' => $userData));

        }
        
    }

    // public function halUtama()
    // {
    //     $userData = $this->session->userdata('userData');
    //     // if($this->session->userdata('userData')){
    //     //     var_dump($this->session->userdata('userData'));
    //     // }
    //     $this->load->view('userView/PHP/halamanUtama', array('userData' => $userData));
    // }
    public function login()
    {
        $this->load->view('userView/PHP/login');
    }
    public function daftar()
    {
        $this->load->view('userView/PHP/daftar');
    }
    public function pilihBis()
    {
        $userData = $this->session->userdata('userData');
        $objFilter = $this->session->userdata('objFilter');
        // $dbBis = $this->session->userdata('jadwal_bis');
        $this->load->model('Database');
        $dbBis['jadwal_bis'] = $this->Database->dataBis($objFilter['kotaAsal'], $objFilter['tujuanKota']);
        // if ($dbBis['jadwal_bis']) {
            $this->load->view('userView/PHP/pilihBis', array('userData' => $userData, 'objFilter' => $objFilter, 'jadwal_bis' => $dbBis['jadwal_bis']));
            // return redirect('pilihBis');
        // }
        // $this->load->view('userView/PHP/pilihBis', array('userData' => $userData, 'objFilter' => $objFilter, 'jadwal_bis' => $dbBis['jadwal_bis']));
    }
    public function pilihKursi()
    {
        $userData = $this->session->userdata('userData');
        $objFilter = $this->session->userdata('objFilter');
        $id = $this->session->userdata('id');
        $this->load->model('Database');
        $jadwalDipilih['jadwalTerpilih'] = $this->Database->dataBisTerpilih($id);
        $kursiTerpilih['kursiTerpesan'] = $this->Database->kursiTerpesan($id);
        $this->load->view('userView/PHP/pilihKursi', array('userData' => $userData, 'objFilter' => $objFilter, 'jadwalTerpilih' => $jadwalDipilih['jadwalTerpilih'], 'kursiTerpesan' => $kursiTerpilih['kursiTerpesan']));
        // redirect('userView/PHP/pilihKursi');
    }
    public function pesan()
    {
        $userData = $this->session->userdata('userData');
        $objFilter = $this->session->userdata('objFilter');
        $id = $this->session->userdata('id');
        $this->load->model('Database');
        $jadwalDipilih['jadwalTerpilih'] = $this->Database->dataBisTerpilih($id);
        $this->load->view('userView/PHP/pesan', array('userData' => $userData, 'objFilter' => $objFilter, 'jadwalTerpilih' => $jadwalDipilih['jadwalTerpilih']));
        // redirect('userView/PHP/pilihKursi');
    }

    public function caraPembayaran()
    {
        $userData = $this->session->userdata('userData');
        $objFilter = $this->session->userdata('objFilter');
        $id = $this->session->userdata('id');
        $this->load->model('Database');
        $bank['tampilBank'] = $this->Database->tampilBank();
        // var_dump($bank['tampilBank']);
        $jadwalDipilih['jadwalTerpilih'] = $this->Database->dataBisTerpilih($id);
        $this->load->view('userView/PHP/payment', array('userData' => $userData, 'objFilter' => $objFilter, 'jadwalTerpilih' => $jadwalDipilih['jadwalTerpilih'], 'tampilBank' => $bank['tampilBank']));
    }

    public function pembayaranAkhir()
    {
        $userData = $this->session->userdata('userData');
        $objFilter = $this->session->userdata('objFilter');
        $id = $this->session->userdata('id');
        $id_bank = $this->session->userdata('idBank');

        // Menentukan waktu awal
        $waktuAwal = time();

        // Menentukan waktu akhir (misalnya, 10 menit ke depan)
        $waktuAkhir = strtotime('+45 minutes', $waktuAwal);

        // Hitung selisih waktu dalam menit
        $selisihMenit = round(($waktuAkhir - $waktuAwal) / 60);

        // Cek apakah waktu hitungan mundur telah habis
        if ($selisihMenit <= 0) {
            // Jika waktu habis, redirect ke halaman tertentu
            redirect('Home');
        }

        // Kirim data hitungan mundur ke view
        $data['hitunganMundur'] = $selisihMenit;
        // $rincian = $this->session->userdata('rincian');
        // if ($rincian) {
        // var_dump($rincian);
        $this->load->model('Database');
        $bankTerpilih['dipilihBank'] = $this->Database->pilihBank($id_bank);
        $jadwalDipilih['jadwalTerpilih'] = $this->Database->dataBisTerpilih($id);
        $this->load->view(
            'userView/PHP/payment2',
            array(
                'userData' => $userData,
                'objFilter' => $objFilter,
                'jadwalTerpilih' => $jadwalDipilih['jadwalTerpilih'],
                'dipilihBank' => $bankTerpilih['dipilihBank'],
                // 'rincian' => $rincian
                'hitunganMundur' => $data['hitunganMundur'],
            )
        );
        // } else {
        //     var_dump($rincian);
        // }

    }

    public function profil()
    {
        $userData = $this->session->userdata('userData');
        $this->load->view('userView/PHP/profil', array('userData' => $userData));
    }
    public function coba()
    {
        $userData = $this->session->userdata('userData');
        $this->load->view('userView/PHP/pilihBis', array('userData' => $userData));
    }
    public function editProfil()
    {
        $userData = $this->session->userdata('userData');
        // $dtUsers = $this->session->userdata('dtUsers');
        // var_dump($dtUsers);
        $this->load->view('userView/PHP/edit_profil', array('userData' => $userData));
    }

    public function tentangKami()
    {
        $userData = $this->session->userdata('userData');
        $this->load->view('userView/PHP/tentangkami', array('userData' => $userData));
    }

    public function syarat()
    {
        $userData = $this->session->userdata('userData');
        $this->load->view('userView/PHP/syaratketentuan', array('userData' => $userData));
    }
    public function history()
    {
        $userData = $this->session->userdata('userData');
        $this->load->model('Database');
        $getHistory['history'] = $this->Database->getDataTransaction();
        $this->load->view('userView/PHP/history', array('userData' => $userData, 'history' => $getHistory['history']));
    }

    public function pilihHistory()
    {
        $id_order = $this->input->post('id_order');
        if ($id_order) {
            $this->session->set_userdata('id_order', $id_order);
            return redirect('rincianhistory');
        }
    }

    public function rincianHistory()
    {
        $userData = $this->session->userdata('userData');
        $id_order = $this->session->userdata('id_order');
        $this->load->model('Database');
        $riwayatDipilih['riwayatTerpilih'] = $this->Database->selectedHistory($id_order);
        // var_dump($riwayatDipilih['riwayatTerpilih']);
        $this->load->view('userView/PHP/rhistory', array('userData' => $userData, 'selectedHistory' => $riwayatDipilih['riwayatTerpilih']));
    }

    public function faq()
    {
        $userData = $this->session->userdata('userData');
        $this->load->view('userView/PHP/FAQ', array('userData' => $userData));
    }

    public function hubKami()
    {
        $userData = $this->session->userdata('userData');
        $this->load->view('userView/PHP/hubungikami', array('userData' => $userData));
    }
    public function fpass()
    {
        $userData = $this->session->userdata('userData');
        $this->load->view('userView/PHP/forgotpass', array('userData' => $userData));
    }

    public function ubhSandi()
    {
        $userData = $this->session->userdata('userData');
        $this->load->view('userView/PHP/editPass', array('userData' => $userData));
    }

    public function masukkanEmail()
    {
        $kode = rand(10000, 99999);
        $to = $this->input->post('email');
        $subject = 'Kode OTP';
        $message = 'Kode Untuk Mereset Password Anda Adalah ' . $kode;
        // Server settings
        $mail = new PHPMailer(true);

        try {
            $mail->SMTPDebug = SMTP::DEBUG_SERVER;
            $mail->isSMTP();
            $mail->Host = 'smtp.googlemail.com';
            $mail->SMTPAuth = true;
            $mail->Username = 'pharaschyte@gmail.com'; // ubah dengan alamat email Anda
            $mail->Password = 'tygeoqaygpugkban'; // ubah dengan password email Anda
            $mail->SMTPSecure = 'ssl';
            $mail->Port = 465;

            $mail->setFrom('pharaschyte@gmail.com', 'Admin Travelin'); // ubah dengan alamat email Anda
            $mail->addAddress($to);
            // $mail->addReplyTo('alamatemailanda@gmail.com'); // ubah dengan alamat email Anda

            // Isi Email
            $mail->isHTML(true);
            $mail->Subject = $subject;
            $mail->Body = $message;

            $mail->send();

            // Pesan Berhasil Kirim Email/Pesan Error
            $this->session->set_userdata('kode', $kode);
            $this->session->set_userdata('email', $to);
            return redirect('kodeverifikasi');
            // session()->setFlashdata('success', 'Selamat, email berhasil terkirim!');
            // return redirect()->to('/email');
        } catch (Exception $e) {
            return redirect('forgotpassword');
            // session()->setFlashdata('error', "Gagal mengirim email. Error: " . $mail->ErrorInfo);
            // return redirect()->to('/email');
        }

        /*$this->load->library('phpmailer_lib');
        $kode = rand(10000, 99999);
        $to = $this->input->post('email');
        $subject = 'Kode OTP';
        $message = 'Kode Untuk Mereset Password Anda Adalah ' . $kode;
        $fromEmail = 'admin@gmail.com';
        $fromName = 'Admin';

        if ($this->phpmailer_lib->send($to, $subject, $message, $fromEmail, $fromName)) {
            $this->session->set_userdata('kode', $kode);
            return redirect('kodeverifikasi');
            // echo 'Email terkirim';
        } else {
            echo 'Gagal mengirim email';
            echo $this->phpmailer_lib->mail->ErrorInfo;
            // return redirect('forgotpassword');
            var_dump($to);
            var_dump($kode);
        }*/
    }
    public function masukkanEmail2()
    {
        $kode = rand(10000, 99999);
        $to = $this->session->userdata('email');
        $subject = 'Kode OTP';
        $message = 'Kode Untuk Mereset Password Anda Adalah ' . $kode;
        // Server settings
        $mail = new PHPMailer(true);

        try {
            $mail->SMTPDebug = SMTP::DEBUG_SERVER;
            $mail->isSMTP();
            $mail->Host = 'smtp.googlemail.com';
            $mail->SMTPAuth = true;
            $mail->Username = 'pharaschyte@gmail.com'; // ubah dengan alamat email Anda
            $mail->Password = 'tygeoqaygpugkban'; // ubah dengan password email Anda
            $mail->SMTPSecure = 'ssl';
            $mail->Port = 465;

            $mail->setFrom('pharaschyte@gmail.com', 'Admin Travelin'); // ubah dengan alamat email Anda
            $mail->addAddress($to);
            // $mail->addReplyTo('alamatemailanda@gmail.com'); // ubah dengan alamat email Anda

            // Isi Email
            $mail->isHTML(true);
            $mail->Subject = $subject;
            $mail->Body = $message;

            $mail->send();

            // Pesan Berhasil Kirim Email/Pesan Error
            $this->session->set_userdata('kode', $kode);
            $this->session->set_userdata('email', $to);
            return redirect('kodeverifikasi');
            // session()->setFlashdata('success', 'Selamat, email berhasil terkirim!');
            // return redirect()->to('/email');
        } catch (Exception $e) {
            return redirect('forgotpassword');
            // session()->setFlashdata('error', "Gagal mengirim email. Error: " . $mail->ErrorInfo);
            // return redirect()->to('/email');
        }

        /*$this->load->library('phpmailer_lib');
        $kode = rand(10000, 99999);
        $to = $this->input->post('email');
        $subject = 'Kode OTP';
        $message = 'Kode Untuk Mereset Password Anda Adalah ' . $kode;
        $fromEmail = 'admin@gmail.com';
        $fromName = 'Admin';

        if ($this->phpmailer_lib->send($to, $subject, $message, $fromEmail, $fromName)) {
            $this->session->set_userdata('kode', $kode);
            return redirect('kodeverifikasi');
            // echo 'Email terkirim';
        } else {
            echo 'Gagal mengirim email';
            echo $this->phpmailer_lib->mail->ErrorInfo;
            // return redirect('forgotpassword');
            var_dump($to);
            var_dump($kode);
        }*/
    }

    public function verifikasi()
    {
        $userData = $this->session->userdata('userData');
        // $kodeOTP = $this->session->userdata('kode');
        $this->load->view('userView/PHP/kodeverifikasi', array('userData' => $userData));
    }

    public function validasiKodeOTP()
    {
        $kodeOTP = $this->session->userdata('kode');
        // var_dump($kodeOTP);
        $this->form_validation->set_rules('kode_verifikasi', 'Kode OTP', 'callback_check_otp');
        if ($this->form_validation->run() == FALSE) {
            // Validasi gagal, lakukan tindakan yang sesuai
            // Contoh: kembali ke halaman form dengan pesan error
            //return redirect('kodeverifikasi');
            echo 'kode salah';
        } else {
            return redirect('resetpassword');
            // Validasi berhasil, lakukan tindakan yang sesuai
        }
    }

    public function check_otp($str)
    {
        $kodeOTP = $this->session->userdata('kode');

        if ($str == $kodeOTP) {
            return TRUE;
        } else {
            $this->form_validation->set_message('check_otp', 'Kode OTP tidak valid.');
            return FALSE;
        }
    }

    public function rstpass()
    {
        $userData = $this->session->userdata('userData');
        $this->load->view('userView/PHP/resetpassw', array('userData' => $userData));
    }

    public function resetp()
    {
        $email = $this->session->userdata('email');
        $pw = $this->input->post('password');
        var_dump($email);
        $this->form_validation->set_rules('password', 'Password', 'required|min_length[6]');
        $this->form_validation->set_rules('password_confirmation', 'Confirmation Password', 'matches[password]');
        if ($this->form_validation->run() != FALSE) {
            $this->load->model('Database');
            if ($this->Database->resetPW($email, $pw)) {
                return redirect('Login');
            } else {

            }
        } else {
            return redirect('resetpassword');
        }
    }

    public function rincianPembelian()
    {
        $jumlahPenumpang = count($this->input->post());
        for ($i = 0; $i < $jumlahPenumpang; $i++) {
            $rincian[$i] = array(
                'namaPembeli' => $this->input->post('txtnama_' . $i),
                'umurPembeli' => $this->input->post('txtumur_' . $i),
                'emailPembeli' => $this->input->post('txtemail_' . $i),
                'noTlpPembeli' => $this->input->post('noTlp_' . $i),
                'index' => $this->input->post('index'),
            );
        }
        if ($rincian) {
            $this->session->set_userdata('rincian', $rincian);
            redirect('pembayaran');
        }
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
                    $this->session->set_userdata('userData', $userData);
                    // $this->load->view('userView/PHP/halamanUtama', array('userData' => $userData));
                    return redirect('Home');
                } else {
                    $this->load->view('userView/PHP/daftar');
                }
            } else {
                $this->load->view('userView/PHP/daftar');
            }

        } else {
            $this->load->view('userView/PHP/daftar');
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
            // $this->load->view('userView/PHP/halamanUtama', array('userData' => $userData));
            $this->session->set_userdata('userData', $userData);
            return redirect('Home');
        } else {
            return redirect('Login');
        }
    }

    public function filter()
    {
        // $userData = $this->session->userdata('userData');
        $objFilter = [
            'kotaAsal' => $this->input->post('asalKota'),
            'tujuanKota' => $this->input->post('kotaTujuan'),
            'tglBerangkat' => $this->input->post('tglBerangkat'),
            'tglPulang' => $this->input->post('tglPulang'),
            'jmlPenumpang' => $this->input->post('jmlPenumpang')
        ];
        // $kotaAsal = $this->input->post('asalKota');
        // $kotaTujuan = $this->input->post('kotaTujuan');
        // $this->load->model('Database');
        // $dbBis['jadwal_bis'] = $this->Database->dataBis($kotaAsal, $kotaTujuan);
        if ($objFilter != null) {
            // $dataBis = $dbBis['jadwal_bis'];
            // print_r($dbBis['jadwal_bis']);
            $this->session->set_userdata('objFilter', $objFilter);

            // $this->load->view('userView/PHP/pilihBis', array('userData' => $userData, 'objFilter' => $objFilter, 'jadwal_bis' => $dbBis['jadwal_bis']));
            return redirect('pilihBis');
        }

        // $this->load->view('userView/PHP/pilihBis', array('userData' => $userData, 'objFilter' => $objFilter));

    }

    public function pindahPesan()
    {
        return redirect('pesan');
    }

    public function dataPilihBis()
    {

        $id = $this->input->post('id');
        if ($id) {
            // print_r($id);
            $this->session->set_userdata('id', $id);
            return redirect('pilihKursi');
        }

        // var_dump($this->input->post());die;
        // $jamBerangkat = $this->input->post('jamBerangkat');
        // $dataBis = [
        //     // 'logo' => $this->input->post('logoBis'),
        //     'jamBerangkat' => $this->input->post('jamKeberangkatan'),
        //     'terminalAwal' => $this->input->post('terminalAwal'),
        //     'durasi' => $this->input->post('durasi'),
        //     'jamDatang' => $this->input->post('jamDatang'),
        //     'terminalTujuan' => $this->input->post('terminalTujuan'),
        //     'kelas' => $this->input->post('kelas'),
        //     'hargaTiket' => $this->input->post('hargaTiket')
        // ];
        // var_dump($this->input->post());
        // $jsonData = json_encode($this->input->post());
        // $data = json_decode($jsonData, true);
        // if ($dataBis != null){
        //     $this->session->set_userdata('dataBis', $dataBis);
        //     // $this->session->set_userdata('jam', $jam);
        //     // echo json_encode($jamBerangkat);// print_r($dataBis);
        //     // echo json_encode($dataBis);// 
        //     // print_r($jam);
        //     // if( $this->session->userdata('jam')){
        //     //     var_dump( $this->session->userdata('jam'));
        //     // }
        // }

    }

    public function pilihMetode()
    {
        $id_bank = $this->input->post('optradio');
        // if($id_bank){
        $this->session->set_userdata('idBank', $id_bank);
        return redirect('pembayaranAkhir');
        // }
    }

    public function editData()
    {
        $dataUser = $this->session->userdata('userData');
        $dtUsers = [
            // 'email' => $this->input->post('txtemail'),
            'nama' => $this->input->post('txtnama'),
            // 'pass' => $this->input->post('pass'),
            'jenis_kelamin' => $this->input->post('jenis_kelamin'),
            'noHP' => $this->input->post('nohp'),
            'umur' => $this->input->post('age'),
        ];
        $this->load->model('Database');
        // $editprofil['editUsers'] = $this->Database->editUsers($dataUser->email, $dtUsers);
        if ($this->Database->editUsers($dataUser->email, $dtUsers)) {
            $dataTable['users'] = $this->Database->emailLogin($dataUser->email, $dataUser->pass);
            if ($dataTable['users']) {
                $userData = $dataTable['users'];
                // $this->session->unset_userdata('userData', $userData);
                $this->session->set_userdata('userData', $userData);
                $userData = $this->session->userdata('userData');
                print_r($userData);
                // $this->load->view('userView/PHP/profil', array('userData' => $userData));
                return redirect('profil');
            } else {
                echo ('gagal login');
                // $this->load->view('userView/PHP/edit_profil');
            }
        } else {
            // var_dump($editprofil['editUsers']);
            var_dump($dataUser->email);
            var_dump($dtUsers['pass']);

            echo ('gagal update');
            // $this->load->view('userView/PHP/edit_profil');
        }
    }

    public function etiket()
    {
        $userData = $this->session->userdata('userData');
        $objFilter = $this->session->userdata('objFilter');
        $email = $userData->email;
        $dataOrder = $this->session->userdata('dataOrder');
        $this->load->model('Database');
        // $jadwalDipilih['jadwalTerpilih'] = $this->Database->dataBisTerpilih($id);
        $kursiTerpilih['kursiTerpesan'] = $this->Database->pembayaranKursi($dataOrder['id_order']);
        $tiketView = $this->load->view('userView/PHP/tiket', array('userData' => $userData, 'objFilter' => $objFilter, 'dataOrder' => $dataOrder, 'kursiTerpesan' => $kursiTerpilih['kursiTerpesan']), true);
        if (!empty($tiketView)) {
            // View berhasil dimuat
            // Lakukan tindakan atau kembalikan nilai yang diinginkan
            return $tiketView;
            // return redirect('kirimTiket');
        } else {
            // View gagal dimuat
            // Lakukan tindakan atau kembalikan nilai yang diinginkan
            return false;
        }

    }

    public function valitiket()
    {
        if ($this->etiket()) {
            return redirect('kirimTiket');
        } else {
            // Tindakan yang diambil jika etiket gagal dimuat
            // Misalnya, tampilkan pesan error atau kembalikan pengguna ke halaman sebelumnya
            // redirect('halamanSebelumnya');
            echo 'gagal cetak tiket';
        }
    }

    public function eTicket()
    {
        $userData = $this->session->userdata('userData');

        $subject = 'E-Tiket';
        $message = $this->etiket();
        // Server settings
        $mail = new PHPMailer(true);

        try {
            // $mail->SMTPDebug = SMTP::DEBUG_SERVER;
            $mail->isSMTP();
            $mail->Host = 'smtp.googlemail.com';
            $mail->SMTPAuth = true;
            $mail->Username = 'pharaschyte@gmail.com'; // ubah dengan alamat email Anda
            $mail->Password = 'tygeoqaygpugkban'; // ubah dengan password email Anda
            $mail->SMTPSecure = 'ssl';
            $mail->Port = 465;

            $mail->setFrom('pharaschyte@gmail.com', 'Admin Travelin'); // ubah dengan alamat email Anda
            $mail->addAddress($userData->email);
            // $mail->addReplyTo('alamatemailanda@gmail.com'); // ubah dengan alamat email Anda

            // Isi Email
            $mail->isHTML(true);
            $mail->Subject = $subject;
            $mail->Body = $message;

            $mail->send();

            // Pesan Berhasil Kirim Email/Pesan Error
            // session()->setFlashdata('success', 'Selamat, email berhasil terkirim!');
            // return redirect()->to('/email');
            return redirect('Home');
            // $this->load->view('userView/PHP/halamanUtama', array('userData' => $userData));
        } catch (Exception $e) {
            // session()->setFlashdata('error', "Gagal mengirim email. Error: " . $mail->ErrorInfo);
            // return redirect()->to('/email');
        }
    }

    public function logout(){
        $this->session->sess_destroy();
        return redirect('Home');
    }

    /*$this->load->library('phpmailer_lib');
    $kode = rand(10000, 99999);
    $to = $this->input->post('email');
    $subject = 'Kode OTP';
    $message = 'Kode Untuk Mereset Password Anda Adalah ' . $kode;
    $fromEmail = 'admin@gmail.com';
    $fromName = 'Admin';

    if ($this->phpmailer_lib->send($to, $subject, $message, $fromEmail, $fromName)) {
        $this->session->set_userdata('kode', $kode);
        return redirect('kodeverifikasi');
        // echo 'Email terkirim';
    } else {
        echo 'Gagal mengirim email';
        echo $this->phpmailer_lib->mail->ErrorInfo;
        // return redirect('forgotpassword');
        var_dump($to);
        var_dump($kode);
    }*/


}