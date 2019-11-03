<?php
class D_desa extends CI_Model
{
 public function __construct()
	{
		$this->load->database();
	}	
	
 function tambah_data_pembangunan($data_pembangunan)
 {
		$this->db->insert('pembangunan',$data_pembangunan);
		# code...
	}
 function tambah_data_monitor($data_monitor)
 {
		$this->db->insert('monitoring',$data_monitor);
		# code...
	}
 function tampil()
 {   /* fungsi menampilkan data pembangunan */
	$tampil=$this->db->get('pembangunan');
	if ($tampil->num_rows()>0) {
		foreach ($tampil->result() as $data) {
			$hasil[]=$data;
			}
		return $hasil;
	}
}
 function tampilMon()
 {   /* fungsi menampilkan data monitoring */
	$tampilMon=$this->db->get('monitoring');
	if ($tampilMon->num_rows()>0) {
		foreach ($tampilMon->result() as $data) {
			$hasilMon[]=$data;
			}
		return $hasilMon;
	}
}
 function hapus_data($data_kode)
 {
	$this->db->where($data_kode);
	$this->db->delete('pembangunan');
	}
function cari_data($data_kode){
	$this->db->where($data_kode);
	$hasil=$this->db->get('pembangunan')->result();
	return $hasil;
}
function edit_data($data_kode,$data_pembangunan){
	$this->db->where($data_kode);
	$this->db->update('pembangunan',$data_pembangunan);
}

function cariPemDes(){
	$cari=$this->input->GET('cari',true);
	$data=$this->db->query("SELECT * from pembangunan where jenis_kegiatan like '%$cari%'");
	return $data->result();
}

function in_daftar($data_daftar){
$this->db->insert('pendaftaran',$data_daftar);	
}
}
?>