<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Desa Poko</title>
<link rel="stylesheet" href="<?php  echo base_url() ?>assets/css/style.css" /> 
</head>
<body>
<div id="size">
<div id="header">
	<?php 
	/*
	 * Variabel $headernya diambil dari libraries template.php
	 * (application/libraries/template.php)
	 * */
	echo $headernya; ?>
</div>

<div id="content">
	
	<?php 
	/*
	 * Variabel $contentnya diambil dari libraries template.php
	 * (application/libraries/template.php)
	 * */
	echo $contentnya; ?>
</div>

<div id="footer">
	<?php 
	/*
	 * Variabel $footernya diambil dari libraries template.php
	 * (application/libraries/template.php)
	 * */
	echo $footernya; ?>
</div>
</div>
</body>
</html>
