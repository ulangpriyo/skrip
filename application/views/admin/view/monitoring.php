<?php
echo form_open('Desa_poko/input_monitoring'); ?>
	<fieldset>
  <legend><h1>MONITORING</h1></legend>
  <label>JENIS KEGIATAN </label><br>
  <input type="text" name="j_kegiatan" style="width:150px"><br><br> 
  
  <label>ID PEMBANGUNAN </label><br>
  <input type="text" name="id_pembangunan" style="width:150px"><br><br>
  
  <label>LOKASI </label><br>
  <input type="text" name="lokasi" style="width:150px"><br><br>

  <label>UKURAN TERSELESAIKAN </label><br>
  <input type="text" name="ukuran_selesai" style="width:150px"><br><br>

  <label>SATUAN TERSELESAIKAN </label><br>
  <input type="text" name="satuan_selesai" style="width:150px"><br><br>

  <label>JUMLAH HARI </label><br>
  <input type="text" name="jml_hr_kerja" style="width:150px"><br><br>

  <label>TANGGAL MONITORING </label><br>
  <input type="date" name="tgl"><br><br>

  <button type="submit">tambah</button>
  
  </fieldset></div>
  <div id="monitoring"> <!-- pencarian -->
	<center><h1>Data Monitoring</h1></center>
	<!-- pencarian -->
	 <div class="box container-1">
	  <input type="search" id="search" placeholder="Search..." width="200px" /><span class="icon"><i class="fa fa-search"></i></span>
	 </div>

	 <?//menampilkan hasil monitoring?>
	<table border="1" width="800px">
	  <tr>
		<th>No</th>
	 	<th>JENIS KEGIATAN</th>
	 	<th>ID PEMDES</th>
	 	<th>LOKASI</th>
	 	<th>UKURAN SELESAI</th>
	 	<th>SATUAN SELESAI</th>
	 	<th>JUMLAH HARI KERJA</th>
	 	<th>TANGGAL</th>
	  </tr>
	 <?php 
	 $no = 1;
	 if(!empty($hasilMon))
	 foreach($hasilMon as $data){ 	?>
		<tr>
		 <td><?php echo $no; ?></td>
		 <td><?php echo $data->j_kegiatan; ?></td>
		 <td><?php echo $data->id_pembangunan; ?></td>
		 <td><?php echo $data->lokasi;?></td>
		 <td><?php echo $data->ukuran_selesai;?></td>
		 <td><?php echo $data->satuan_selesai;?></td>
		 <td><?php echo $data->jml_hr_kerja;?></td>
		 <td><?php echo $data->tgl;?></td>
		</tr>
		<?php $no++;} ?>
	</table>
	  <?php
 	  echo form_close(); ?>
 <?php $this->load->view('template/footer');?></div>
	 