<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Buku_tamu extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->helper('url');
        $this->load->model('m_tamu');
	}


	public function index(){				
		$data['title'] = 'eTamu | SMK Negeri 1 Kawali';
		$data['content'] = 'eTamu';

		$this->load->database();
		$jumlah_data = $this->m_tamu->jumlah_data('buku_tamu')->num_rows();
		$this->load->library('pagination');
		$config['base_url'] = base_url('buku_tamu/index/');
		$config['total_rows'] = $jumlah_data;
		$config['per_page'] = 10;
		$from = $this->uri->segment(3);
		$this->pagination->initialize($config);
		$data['tamu'] = $this->m_tamu->data('buku_tamu',$config['per_page'],$from)->result();
		function tgl_indo($tanggal){
			$bulan = array (
				1 =>   'Januari',
				'Februari',
				'Maret',
				'April',
				'Mei',
				'Juni',
				'Juli',
				'Agustus',
				'September',
				'Oktober',
				'November',
				'Desember'
			);
			$pecahkan = explode('-', $tanggal);
			
			// variabel pecahkan 0 = tahun
			// variabel pecahkan 1 = bulan
			// variabel pecahkan 2 = tanggal

			return $pecahkan[2] . ' ' . $bulan[ (int)$pecahkan[1] ] . ' ' . $pecahkan[0];
		}

		$this->load->view('v_head.php', $data);
		$this->load->view('v_buku_tamu.php', $data);
		$this->load->view('v_footer.php');
	}
}
?>