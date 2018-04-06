 <?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title> <h1>Form Edit</h1></title>

	<style type="text/css">

	::selection { background-color: #E13300; color: white; }
	::-moz-selection { background-color: #E13300; color: white; }

	body {
		background-color: #C6878F;
		margin: 40px;
		font: 13px/20px normal Helvetica, Arial, sans-serif;
		color: #253D5B;
	}

	a {
		color: #003399;
		background-color: transparent;
		font-weight: normal;
	}

	a:link, a:visited {
    background-color: #67697C;
    color: white;
    padding: 14px 25px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
	}

	a:hover, a:active {
    background-color: red;
	}

	h1 {
		color: #253D5B;
		background-color: #B79D94;
		border-bottom: 1px solid #D0D0D0;
		font-size: 28px;
		font-weight: normal;
		margin: 0 0 14px 0;
		padding: 14px 15px 10px 15px;
		font-family: olivier;
		width: 150px;
	}

	code {
		font-family: Consolas, Monaco, Courier New, Courier, monospace;
		font-size: 12px;
		background-color: #f9f9f9;
		border: 1px solid #D0D0D0;
		color: #002166;
		display: block;
		margin: 14px 0 14px 0;
		padding: 12px 10px 12px 10px;
	}

	#body {
		margin: 0 15px 0 15px;
	}
	#container{
		margin: 100px;
		margin-left: 150px;
		margin-top: 30px;
		border: 1px solid #D0D0D0;
		-webkit-box-shadow: 0 0 8px #D0D0D0;
	}

	p.footer {
		text-align: right;
		font-size: 11px;
		border-top: 1px solid #D0D0D0;
		line-height: 32px;
		padding: 0 10px 0 10px;
		margin: 20px 0 0 0;
	}
	.footer {
    position: fixed;
    left: 0;
    bottom: 0;
    width: 100%;
    background-color: #969696;
    color: white;
    text-align: center;
	}

	</style>
</head>
<body>

<div id="container">
	<h1 align="center">Edit Your Data</h1>

	<div id="body">
		<a href="<?php echo site_url('welcome') ?>">Kembali</a>
		<?php if($dataEdit){
		$id = $dataEdit->nim;
		$nim = $dataEdit->nim;
		$nama = $dataEdit->nama;
		$ip = $dataEdit->ip;
		}else{
			$nim= "";
			$nama = "";
			$ip = "";
		} ?>
		<form action="<?php echo site_url('welcome/update/'.$nim) ?>" method="POST">
			NIM <br> 
			<input type="text" name="nim" value="<?php echo $nim?>" /><br>
			Nama Lengkap <br> 
			<input type="text" name="nama" value="<?php echo $nama?>" /><br>
			IP <br>
			<input type="text" name="ip" value="<?php echo $ip?>" /><br>
			<input type="submit" name="simpan" value="Simpan" />
		</form>
	</div>

	<p class="footer">Mia Larisa Waskito(G64160038)     <br></p>
</div>

</body>
</html>