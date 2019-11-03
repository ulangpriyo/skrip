<center><h1>Monitoring</h1></center>
<?php
echo form_open('Desa_poko/input_monitoring'); ?>
Jenis kegiatan <br>
  <input type="text" name="j_kegiatan"><br><br> 
  <button type="submit">tambah</button>
  </div>
  <div id="kanan"> <!-- pencarian -->
	<center><h1>Data Monitoring</h1></center>
	<!-- pencarian -->
	 <div class="box container-1">
	  <input type="search" id="search" placeholder="Search..." width="200px" /><span class="icon"><i class="fa fa-search"></i></span>
	 </div>

	 <?//menampilkan hasil monitoring?>
	<table style="margin:20px auto;" border="1">
	  <tr>
		<th>No</th>
	 	<th>JENIS KEGIATAN</th>
	  </tr>
	 <?php 
	 $no = 1;
	 if(!empty($hasilMon))
	 foreach($hasilMon as $data){ 	?>
		<tr>
		 <td><?php echo $no; ?></td>
		 <td><?php echo $data->j_kegiatan; ?></td>
		</tr>
		<?php $no++;} ?>
	</table>
	  <?php
 	  echo form_close(); ?>
 <?php $this->load->view('template/footer');?></div>
	 