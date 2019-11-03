<table border="1" width="800px">
	  <tr>
		<th>No</th>
	 	<th>TANGGAL DAFTAR</th>
	 	<th>ID PEMDES</th>
	 	<th>NAMA</th>
	 	<th>NO KTP</th>
	 	<th>ALAMAT</th>
	 	<th>NO HANDPHONE</th>
	 	<th>AKSI</th>
	  </tr>
	 <?php 
	 $no = 1;
	 if(!empty($hasilPenDaf))
	 foreach($hasilPenDaf as $data){ 	?>
		<tr>
		 <td><?php echo $no; ?></td>
		 <td><?php echo $data->tanggal; ?></td>
		 <td><?php echo $data->id_pembangunan; ?></td>
		 <td><?php echo $data->nama;?></td>
		 <td><?php echo $data->no_ktp;?></td>
		 <td><?php echo $data->alamat;?></td>
		 <td><?php echo $data->no_hp;?></td>
		 <td>
		 	<button type="submit">PILIH</button>
		 	<button type="submit">TOLAK</button>
		 </td>
		</tr>
		<?php $no++;} ?>
	</table>
