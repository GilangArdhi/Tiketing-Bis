<?php if (!defined('BASEPATH'))
	exit('No direct script access allowed');
header('Access-Control-Allow-Origin: *');
header("Access-Control-Allow-Methods: GET, OPTIONS");

class Snap extends CI_Controller
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
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */


	public function __construct()
	{
		parent::__construct();
		$params = array('server_key' => 'SB-Mid-server-m1cY0OPCe74OB5KeI_elGVpD', 'production' => false);
		$this->load->library('midtrans');
		$this->midtrans->config($params);
		$this->load->helper('url');
	}

	public function index()
	{
		$this->load->view('checkout_snap');
	}

	public function token()
	{
		$tglBerangkat = $this->input->post('tglBerangkat');
		$tglPulang = $this->input->post('tglPulang');
		$kd_jadwal = $this->input->post('kd_jadwal');
		$selectedSeats = $this->input->post('selectedSeats');
		$id = $this->input->post('idUser');

		$this->session->set_userdata('tglBerangkat', $tglBerangkat);
		$this->session->set_userdata('tglPulang', $tglPulang);
		$this->session->set_userdata('id_user', $id);
		$this->session->set_userdata('kd_jadwal', $kd_jadwal);
		$this->session->set_userdata('selectedSeats', $selectedSeats);

		$nama = $this->input->post('namaUser');
		$email = $this->input->post('emailUser');
		$noHp = $this->input->post('noHpUser');
		$namaBis = $this->input->post('namaBis');
		$kelas = $this->input->post('kelas');
		$hargaTiket = $this->input->post('hargaTiket');
		$jumlahTotal = $this->input->post('jumlahTotal');
		$terminalAwal = $this->input->post('terminalAwal');
		$jamBerangkat = $this->input->post('jamBerangkat');
		$terminalTujuan = $this->input->post('terminalTujuan');
		$jamDatang = $this->input->post('jamDatang');
		$jmlPenumpang = $this->input->post('jmlPenumpang');



		// Required
		$transaction_details = array(
			'order_id' => rand(),
			'gross_amount' => $jumlahTotal, // no decimal allowed for creditcard
		);

		// Optional
		$item1_details = array(
			//   'id' => 'a1',
			'price' => $hargaTiket,
			'quantity' => $jmlPenumpang,
			'name' => "Harga tiket" . " " . $namaBis
		);

		// Optional
		// $item2_details = array(
		//   'id' => 'a2',
		//   'price' => 20000,
		//   'quantity' => 2,
		//   'name' => "Orange"
		// );

		// Optional
		$item_details = array($item1_details);

		// Optional
		$billing_address = array(
			'first_name' => "Andri",
			'last_name' => "Litani",
			'address' => "Mangga 20",
			'city' => "Jakarta",
			'postal_code' => "16602",
			'phone' => "081122334455",
			'country_code' => 'IDN'
		);

		// // Optional
		// $shipping_address = array(
		//   'first_name'    => "Obet",
		//   'last_name'     => "Supriadi",
		//   'address'       => "Manggis 90",
		//   'city'          => "Jakarta",
		//   'postal_code'   => "16601",
		//   'phone'         => "08113366345",
		//   'country_code'  => 'IDN'
		// );

		// Optional
		$customer_details = array(
			'first_name' => $nama,
			'email' => $email,
			'phone' => $noHp,
			'billing_address' => $billing_address,
			//   'shipping_address' => $shipping_address
		);

		// Data yang akan dikirim untuk request redirect_url.
		$credit_card['secure'] = true;
		//ser save_card true to enable oneclick or 2click
		//$credit_card['save_card'] = true;

		$time = time();
		$custom_expiry = array(
			'start_time' => date("Y-m-d H:i:s O", $time),
			'unit' => 'minute',
			'duration' => 45
		);

		$transaction_data = array(
			'transaction_details' => $transaction_details,
			'item_details' => $item_details,
			'customer_details' => $customer_details,
			'credit_card' => $credit_card,
			'expiry' => $custom_expiry
		);

		error_log(json_encode($transaction_data));
		$snapToken = $this->midtrans->getSnapToken($transaction_data);
		error_log($snapToken);
		echo $snapToken;
	}

	public function finish()
	{
		$tglBerangkat = $this->session->userdata('tglBerangkat');
		$tglPulang = $this->session->userdata('tglPulang');
		$id_user = $this->session->userdata('id_user');
		$kd_jadwal = $this->session->userdata('kd_jadwal');
		$selectedSeats = $this->session->userdata('selectedSeats');
		var_dump($selectedSeats);
		$result = json_decode($this->input->post('result_data'), true);
		// $stat = array(
		// 	"status_message" => "Success, transaction is found"
		// );

		// $status_message = $stat["status_message"];
		// $status = explode(",", $status_message)[0];
		// echo $status;
		// echo '<br>RESULT <br><pre>';
		// var_dump($result);
		// echo '</pre>' ;
		$data = [
			'id_order' => $result['order_id'],
			'gross_amount' => $result['gross_amount'],
			'payment_type' => $result['payment_type'],
			'transaction_time' => $result['transaction_time'],
			'bank' => $result["va_numbers"][0]["bank"],
			'va_number' => $result['va_numbers'][0]['va_number'],
			'pdf_url' => $result['pdf_url'],
			'status_code' => $result['status_code'],
			'kd_jadwal' => $kd_jadwal,
			'tglBerangkat' => $tglBerangkat,
			'tglPulang' => $tglPulang,
			'kursiDipesan' => $selectedSeats,
			'id_user' => $id_user,
			'status_message' => $result['transaction_status']//settlement == success, pending == pending
		];
		// $this->load->model('Database');
		if ($this->db->insert('pembayaran', $data)) {
			// $idOrder = $result['order_id'];
			$this->session->set_userdata('dataOrder', $data);
			return redirect('Home/valitiket');
			// return redirect('halamanUtama');
		};
	}
}