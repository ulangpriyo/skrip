<button onclick="goBack()"> kembali </button>
<script>
    function goBack() {
        window.history.back();
    }
</script>

<table border="0" >	
<?foreach ($data_pembangunan as $data) {
	echo form_open('Desa_poko/input_daftar');
	# code...
} ?>
<fieldset>
  <legend>PENDAFTARAN</legend>
  <input type="text" name="tanggal" value="<?php echo date('Y-m-d');?>">
  <label for="name">Id Pembangunan</label>
  <input type="text" name="id_pembangunan" value="<?php echo $data->id_pembangunan;?>" />
  <label for="name">Nama</label>
  <input type="text" name="nama"/>
  <label for="name">NO KTP</label>
  <input type="text" name="no_ktp"/>
  <label for="name">Alamat</label>
  <input type="text" name="alamat"/>
  <label for="name">No Hp</label>
  <input type="text" name="no_hp"/>
	<button type="submit">Daftar</button>
</fieldset>
 </table>
<?php echo form_close();
?>
