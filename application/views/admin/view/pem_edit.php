<button onclick="goBack()"> << </button>
<script>
    function goBack() {
        window.history.back();
    }
</script>

<table border="0" >	
<?foreach ($data_pembangunan as $data) {
	echo form_open('Desa_poko/edit');
	# code...
} ?>
	<tr>
   	  <td><label>id pembangunan</label> </td>
   	  <td><input type="text" name="id_pembangunan" value="<?php echo $data->id_pembangunan;?>"></td>
	  <td><label>id user</label> </td>
	  <td><input type="text" name="id_user" value="<?php echo $data->id_user;?>"></td>
	  <td><label>Jenis kegiatan</label> </td>
	  <td><input type="text" name="jenis_kegiatan" value="<?php echo $data->jenis_kegiatan; ?>"></td>  
	</tr>
	<tr>
	  <td><label>Lokasi</label> </td>	
	  <td><input type="text" name="lokasi" value="<?php echo $data->lokasi;?>"></td>
	  <td><label>Ukuran jumlah pengadaan</label></td>
	  <td><input type="text" name="ukuran" value="<?php echo $data->ukuran; ?>"></td>
	  <td><label>Satuan (m,km,kg)</label> </td>
	  <td><input type="text" name="satuan" value="<?php echo $data->satuan; ?>"></td>
	</tr>
	<tr>
	  <td><label>Ukuran jumlah biaya</label></td>		
	  <td><input type="text" name="jumlah_biaya" value="<?php echo $data->jumlah_biaya; ?>"></td>
	  <td><label>Sumber Dana</label> </td>
	  <td><input type="text" name="sumber_dana" value="<?php echo $data->sumber_dana; ?>"></td>
	  <td><label>Pola Pelaksanaan</label> </td>
	  <td><input type="text" name="pola_pelaksanaan" value="<?php echo $data->pola_pelaksanaan; ?>"></td>
	</tr>
	<tr>
	  <td><label>tanggal pelaksanaan</label> </td>
	  <td><input type="date" name="tgl_pelaksanaan" value="<?php echo $data->tgl_pelaksanaan; ?>"></td>
	  <td><label>tanggal target selesai</label> </td>
	  <td><input type="date" name="tgl_target_selesai" value="<?php echo $data->tgl_target_selesai; ?>"></td>
	  <td><label>Tanggal Simpan Rcord</label></td>
	  <td><input type="date" name="tanggal" value="<?php echo $data->tanggal; ?>"></td>
	</tr>
	<tr>
	  <td><label>Status</label> </td>
	  <input type="radio" name="status" value="selesai" >selesai
	  <input type="radio" name="status" value="batal">batal
	  <input type="radio" name="status" value="proses">proses
	  <input type="radio" name="status" value="rencana">rencana
	</tr>	  
	<tr>
	  <td><button type="submit">edit</button></td>
	</tr>
 </table>
<?php echo form_close();
?>