<!DOCTYPE html>
<html>
<head>
 <title>Menu Admin</title>
 <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
 <style type="text/css">
	body{
		width: auto; background-color: #FAEBD7;
	}
	table {
  		border-spacing: 1px; font-size: 11;
  	}
  	h1{
  		font-size: 20px; margin-bottom: 3px;
  	}
	#kiri{
		float: left; margin-left: 270px; margin-top: 0px; font-size: 11px;
	}
	#atas{
		float: left; margin-left: 270px; font-size: 11px; width: 70%; background: #F5F5DC;
	}
	#kanan{
		font-size: 11px; float: right; position: relative; margin-right: 300px;
	}
	#monitoring{
		font-size: 11px; float: right; position: relative; margin-right: 50px;
	}
	#bawah{
		margin-top: 350px; position: absolute; width: 95%; margin-left: 3%; 
	}
	#paling_kiri{
		position: absolute;
	}
	.btn{
		background-color: #E9967A ;opacity:2; border: none; color: white; padding: 5px 27.3px; text-align: center;
		display: inline-block; font-size: 15px; cursor: pointer; text-decoration: none; margin-top: 5px; width: 73px;
	}
	.btn:hover{
		background-color: #3e8e41;
	}
	.button1 a{
		background-color: #7FFFD4 ;opacity:2; border: none; color: white; padding: 1px 27.3px; text-align: center;
		display: inline-block; font-size: 15px; cursor: pointer; text-decoration: none; margin-top: 2px; width: 175px;
	}
	.button1:hover{
		background-color: #3e8e41;
	} 
	.button2{
		background-color: none; /* Green */
	}
	.box1{
		width:500px; float: right;	
		border-radius: 2px; -webkit-border-radius: 13px; -moz-border-radius: 13px; border: 1px solid #FFC2DC; outline: none; color: black; padding: 0px 0px 0px 0px; box-shadow:  1px 1px 4px #FFD5E7;	-moz-box-shadow: 1px 1px 4px #FFD5E7; -webkit-box-shadow: 1px 1px 4px #FFD5E7; background: #FFEFF6;
	}
	#footer_admin{
		font-size: 11px;
		background: none;
		padding: 5px;
		color: black;
		text-align: right;
		width: 1150px;
		margin-right: auto;
		margin-left: auto;
		border-radius: 2px;
	}
		
		/*pencarian */

	</style>
</head>
<body>
<div id="paling_kiri">
 <br><br><a href="<?php echo base_url('index.php/Desa_poko'); ?>"class="btn">Home</a>
 <a href="<?php echo base_url('index.php/Desa_poko'); ?>"class="btn">SignOut</a><br>
  <button class="button1"><a href="?page=1" style="text-decoration: none">pembangunan</a></button><br>
  <button class="button1"><a href="?page=2" style="text-decoration: none">monitoring</a></button><br>
  <button class="button1"><a href="?page=3" style="text-decoration: none">pendaftar</a></button>
</div>
<div class="badan">
 <?php 
  if(isset($_GET['page']))
  {
	 $page = $_GET['page'];
	 switch ($page)		{	
		case '1': ?>
		 <div id="bawah">
		   <?php $this->load->view('admin/view/tambahPemDes');	//menampilakan data pembangunan desa
		   break; ?>
		 </div>
	<?php 
		case '2': ?>
		 <div id="kiri">
		   <?php $this->load->view('admin/view/monitoring'); 	//menampilakan data monitoring
			break; 
	?>	 </div>		 
	<?php 
		case '3':    ?>  
		 <div id="monitoring">
		    <?php $this->load->view('admin/view/pendaftar'); 
			break; 
	 }
  } ?> </div>

</div>


</body>
</html>