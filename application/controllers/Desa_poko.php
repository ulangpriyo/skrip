<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Desa_poko extends MY_Controller {
/* function untuk koneksi dengan models */
 function __construct()	{
	parent::__construct();
	$this->load->model('D_desa');
	}
		

	//fungsi untuk admin
 function Sadmin(){	?> 
	<div id="paling_kiri"><?php
	echo "<pre>Selamat Datang Admin</pre>";?>
	</div> <?php
	$this->load->model('D_desa');
	$data['hasil']=$this->D_desa->tampil();	
	$data['hasilMon']=$this->D_desa->tampilMon();	
	$this->load->view('admin/lamanadmin',$data);
	}


	/* laman input pembangunan desa */
 function pemdes(){
	$this->load->view('admin/pemdes');
	}

 public function Tpemdes(){
	$this->load->view('admin/view/tambahPemDes');
	}


	/* proses input data pembangunan desa*/	 
 function input_pemdes()	{
	$id_pembangunan		= $this->input->post('id_pembangunan');
	$id_user 			= $this->input->post('id_user');
	$jenis_kegiatan 	= $this->input->post('jenis_kegiatan');
	$lokasi 			= $this->input->post('lokasi');
	$ukuran				= $this->input->post('ukuran');
	$satuan				= $this->input->post('satuan');
	$jumlah_biaya		= $this->input->post('jumlah_biaya');
	$sumber_dana		= $this->input->post('sumber_dana');
	$pola_pelaksanaan	= $this->input->post('pola_pelaksanaan');
	$tgl_pelaksanaan	= $this->input->post('tgl_pelaksanaan');
	$tgl_target_selesai	= $this->input->post('tgl_target_selesai');
	$tanggal			= $this->input->post('tanggal');
	$status				= $this->input->post('status');
	//------------------------------------------

	$data_pembangunan = array(
	'id_pembangunan'		=>$id_pembangunan,
	'id_user'				=>$id_user,
	'jenis_kegiatan'		=>$jenis_kegiatan,
	'lokasi'				=>$lokasi,
	'ukuran'				=>$ukuran,	
	'satuan'				=>$satuan,
	'jumlah_biaya'			=>$jumlah_biaya,
	'sumber_dana'			=>$sumber_dana,
	'pola_pelaksanaan'		=>$pola_pelaksanaan,
	'tgl_pelaksanaan'		=>$tgl_pelaksanaan,
	'tgl_target_selesai'	=>$tgl_target_selesai,
	'tanggal'				=>$tanggal,
	'status'				=>$status
		);
		$this->D_desa->tambah_data_pembangunan($data_pembangunan);
		redirect('Desa_poko/Sadmin/input_pemdes?page=1');
		}

 function hapus($data){ //hapus data pembangunan
	$data_kode=array('id_pembangunan'=>$data);
	$this->D_desa->hapus_data($data_kode);
	redirect('Desa_poko/Sadmin/input_pemdes?page=1');
	}

 function e($kode){
	$data_kode=array('id_pembangunan'=>$kode);
	$data['data_pembangunan']=$this->D_desa->cari_data($data_kode);
	$this->load->view('admin/view/pem_edit',$data);
	}

 function edit()	{ //edit data pembangunan
	$id_pembangunan		= $this->input->post('id_pembangunan');
	$id_user 			= $this->input->post('id_user');
	$jenis_kegiatan 	= $this->input->post('jenis_kegiatan');
	$lokasi 			= $this->input->post('lokasi');
	$ukuran				= $this->input->post('ukuran');
	$satuan				= $this->input->post('satuan');
	$jumlah_biaya		= $this->input->post('jumlah_biaya');
	$sumber_dana		= $this->input->post('sumber_dana');
	$pola_pelaksanaan	= $this->input->post('pola_pelaksanaan');
	$tgl_pelaksanaan	= $this->input->post('tgl_pelaksanaan');
	$tgl_target_selesai	= $this->input->post('tgl_target_selesai');
	$tanggal			= $this->input->post('tanggal');
	$status				= $this->input->post('status');
	//------------------------------------------
	$data_kode= array('id_pembangunan'=>$id_pembangunan);
	$data_pembangunan = array(
	'id_pembangunan'		=>$id_pembangunan,
	'id_user'				=>$id_user,
	'jenis_kegiatan'		=>$jenis_kegiatan,
	'lokasi'				=>$lokasi,
	'ukuran'				=>$ukuran,	
	'satuan'				=>$satuan,
	'jumlah_biaya'			=>$jumlah_biaya,
	'sumber_dana'			=>$sumber_dana,
	'pola_pelaksanaan'		=>$pola_pelaksanaan,
	'tgl_pelaksanaan'		=>$tgl_pelaksanaan,
	'tgl_target_selesai'	=>$tgl_target_selesai,
	'tanggal'				=>$tanggal,
	'status'				=>$status	);
		$this->D_desa->edit_data($data_kode,$data_pembangunan);
		redirect('Desa_poko/Sadmin/input_pemdes?page=1');

		}



	//admin..
 public function monitor(){
	$this->load->view('admin/view/monitoring');
	}
/* proses input data monitoring*/
 function input_monitoring()	{
	$j_kegiatan = $this->input->post('j_kegiatan');
	//------------------------------------------
	$data_monitor = array(
	'j_kegiatan'=>$j_kegiatan );
		$this->D_desa->tambah_data_monitor($data_monitor);
		redirect('Desa_poko/Sadmin/input_monitoring?page=2');
	}



//package web dinamis user
 public function index()	{
	$this->render_page('home');
		}
 public function pembangunan()	{
	$this->load->model('D_desa');
	$data['hasil']=$this->D_desa->tampil();	
	$this->render_page('pembangunan',$data);
		}
 public function login()	{
	$this->render_page('login');
		}

public function hasil()
	{
		$data2['cari'] = $this->D_desa->cariPemDes();
		$this->load->view('admin/view/result', $data2);
	}
 function daf($kode){
	$data_kode=array('id_pembangunan'=>$kode);
	$data['data_pembangunan']=$this->D_desa->cari_data($data_kode);
	$this->load->view('user_daftar/daftar',$data);
	}

 function input_daftar()	{
	$id_pembangunan = $this->input->post('id_pembangunan');
	$nama			= $this->input->post('nama');
	$no_ktp			= $this->input->post('no_ktp');
	$alamat			= $this->input->post('alamat');
	$no_hp			= $this->input->post('no_hp');
	$tanggal		= $this->input->post('tanggal');
	//------------------------------------------
	$data_daftar = array(
	'id_pembangunan'=>$id_pembangunan,
	'nama'			=>$nama,
	'no_ktp'		=>$no_ktp,
	'alamat'		=>$alamat,
	'no_hp'			=>$no_hp,
	'tanggal'		=>$tanggal

);
		$this->D_desa->in_daftar($data_daftar);
		redirect('Desa_poko/pembangunan');
	}
}