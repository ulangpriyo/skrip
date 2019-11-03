<center><h1>Data Pembangunan Desa</h1></center>
 <table style="margin:20px auto;" border="1" bgcolor="#FFE4C4">
	<tr align="center" bgcolor='#7FFFD4'>
		<th>No</th>
		<th>ID PEMBANGUNAN</th>
		<th>JENIS KEGIATAN</th>
		<th>LOKASI</th>
		<th>TANGGAL PELAKSANAAN</th>
	</tr>
	<?php $no = 1;
		if(!empty($hasil))
		 foreach($hasil as $data){ ?>
		 <tr>
			<td><?php echo $no; ?></td>
			<td><?php echo $data->id_pembangunan; ?></td>
			<td><?php echo $data->jenis_kegiatan; ?></td>
			<td><?php echo $data->status; ?></td>
			<td align="center"><?php echo $data->tgl_pelaksanaan; ?></td>

<td bgcolor="#FAEBD7"><a href='<?php echo base_url()."index.php/Desa_poko/daf/".$data->id_pembangunan; ?>'> DAFTAR </a></td>
		 </tr>	<?php 
		$no++;
		} ?>
 </table>