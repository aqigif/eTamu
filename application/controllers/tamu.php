<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Tamu extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->helper('url');
        $this->load->model('m_tamu');
	}


	public function index(){				
		$data['title'] = 'eTamu | SMK Negeri 1 Kawali';
		$data['content'] = 'eTamu';

		$data['tamu'] = $this->m_tamu->tampil_by('buku_tamu','no_tamu','DESC')->result();
		$data['pilih'] = $this->m_tamu->tampil_data('kabkota')->result();
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
		$data['grafik']=$this->m_tamu->get_grafik();

		$this->load->view('v_head.php', $data);
		$this->load->view('v_navbar.php', $data);
		$this->load->view('v_home.php', $data);
		$this->load->view('v_tamu.php');
		$this->load->view('v_footer.php');
	}

	function aksi_tambah(){
		$tgl = date('Y-m-d');
		$nama = $this->input->post('nama');
		$jabatan = $this->input->post('jabatan');
		$instansi = $this->input->post('instansi');
		$kabkota = $this->input->post('kabkota');
		$kesan = $this->input->post('kesan');
		$pesan = $this->input->post('pesan');
 
		$data = array(
			'tgl' => $tgl,
			'nama' => $nama,
			'jabatan' => $jabatan,
			'instansi' => $instansi,
			'kabkota' => $kabkota,
			'kesan' => $kesan,
			'pesan' => $pesan
			);

		$this->m_tamu->input_data($data,'buku_tamu');
		$this->session->set_flashdata('notif','Terima Kasih telah mengisi buku tamu');
		redirect('tamu#pricing');
	}

}
