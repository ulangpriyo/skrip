<button onclick="goBack()"> << </button>
<script>
    function goBack() {
        window.history.back();
    }
</script>

<h1>HASIL PENCARIAN</h1>
<table border="0">
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
 if(!empty($cari))
  foreach($cari as $data){	?>
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