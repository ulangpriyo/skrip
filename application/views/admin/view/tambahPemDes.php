<center><h1>Data Pembangunan Desa</h1></center>
<!-- pencarian -->
 
 <table border="0">
 <form action="<?php echo base_url('index.php/Desa_poko/hasil') ?>" method="post" >
 	<input type="text" name="keyword" placeholder="masukkan jenis kegiatan..." width="200px">
 	<input type="submit" value="Search">
</form>
 <tr bgcolor="#00FFFF">
	<th>No</th>
	<th>ID PEMBANGUNAN</th>
	<th>ID USER</th>
	<th>JENIS KEGIATAN</th>
	<th>LOKASI</th>
	<th>UKURAN</th>
	<th>SATUAN</th>
	<th>JUMLAH BIAYA</th>
	<th>SUMBER DANA</th>
	<th>POLA PELAKSANAAN</th>
	<th>PELAKSANAAN</th>
	<th>TARGET SELESAI</th>
	<th>TANGGAL</th>
	<th>STATUS</th>
	<th colspan="2" align="center" bgcolor="#FAEBD7"></th>
 </tr>
<?php 
 $no = 1;
 if(!empty($hasil))
  foreach($hasil as $data){	?>
	<tr bgcolor="#7FFFD4">
 	 <td><?php echo $no; ?></td>
	 <td><?php echo $data->id_pembangunan; ?></td>
	 <td><?php echo $data->id_user; ?></td>
	 <td><?php echo $data->jenis_kegiatan; ?></td>
	 <td><?php echo $data->lokasi; ?></td>
	 <td><?php echo $data->ukuran;?></td>
	 <td><?php echo $data->satuan;?></td>
	 <td><?php echo $data->jumlah_biaya;?></td>
	 <td><?php echo $data->sumber_dana;?></td>
	 <td><?php echo $data->pola_pelaksanaan;?></td>
	 <td><?php echo $data->tgl_pelaksanaan;?></td>
	 <td><?php echo $data->tgl_target_selesai;?></td>
	 <td><?php echo $data->tanggal;?></td>
	 <td><?php echo $data->status;?></td>

	 <td bgcolor="#FAEBD7"><a href='<?php echo base_url()."index.php/Desa_poko/e/".$data->id_pembangunan; ?>'> 
	 	<img src="<?php echo base_url(); ?>assets/img/edit.png" width="25" height="25"> </a>
	 </td>
	 <td bgcolor="#FAEBD7"><a href='<?php echo base_url()."index.php/Desa_poko/hapus/".$data->id_pembangunan; ?>'> 
	 	<img src="<?php echo base_url(); ?>assets/img/del.png" width="25" height="25"> </a>
	 </td>
	</tr>
  <?php $no++; } ?>
</table>
<br><div id="footer_Admin"><?php $this->load->view('template/footer');?></div></div>

<div id="atas">
<?php
echo '<center><h1>Tambah Data Pembangunan Desa</h1></center>';
echo form_open('Desa_poko/input_pemdes'); ?>
 <table border="0" >	
	<tr>
   	  <td><label>id pembangunan</label> </td>
	  <td><label>id user</label> </td>
	  <td><label>Jenis kegiatan</label> </td>
	  <td><label>Lokasi</label> </td>	
	</tr>	  
	<tr>
   	  <td><input type="text" name="id_pembangunan" value="PMD<?php echo $no; echo date('ymd');?>" ></td>
	  <td><input type="text" name="id_user"></td>
	  <td><input type="text" name="jenis_kegiatan"></td>  
	  <td><input type="text" name="lokasi"></td>
	</tr>
	<tr>
	  <td><label>Ukuran jumlah pengadaan</label></td>
	  <td><label>Satuan (m,km,kg)</label> </td>
	  <td><label>Ukuran jumlah biaya</label></td>		
	  <td><label>Sumber Dana</label> </td>
	</tr>
	<tr>
	  <td><input type="text" name="ukuran"></td>
	  <td><input type="text" name="satuan"></td>
	  <td><input type="text" name="jumlah_biaya"></td>
	  <td><input type="text" name="sumber_dana"></td>
	</tr>	
	<tr>
	  <td><label>Pola Pelaksanaan</label> </td>
	  <td><label>tanggal pelaksanaan</label> </td>
	  <td><label>tanggal target selesai</label> </td>
	  <td><label>Tanggal Simpan Rcord</label></td>
	</tr>	
	<tr>
	  <td><input type="text" name="pola_pelaksanaan"></td>
	  <td><input type="date" name="tgl_pelaksanaan"></td>
	  <td><input type="date" name="tgl_target_selesai"></td>
	  <td><input type="date" name="tanggal"></td>
	</tr>
	<tr>
	  <td><label>Status</label> </td>
	</tr>
	<tr>
	  <td colspan="2">
	  <input type="radio" name="status" value="selesai">selesai
	  <input type="radio" name="status" value="batal">batal
	  <input type="radio" name="status" value="proses">proses
	  <input type="radio" name="status" value="rencana">rencana
	  </td>
	</tr>
	  <td><button type="submit">tambah</button></td>
 </table>
</div>
<?php echo form_close(); ?>