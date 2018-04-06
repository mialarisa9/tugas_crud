 <?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Belajar CRUD</title>

	<style type="text/css">

	::selection { background-color: #E13300; color: white; }
	::-moz-selection { background-color: #E13300; color: white; }

	body {
		background-color: #C6878F;
		position: fixed;
   	
		font: 13px/20px normal Helvetica, Arial, sans-serif;
		color: ##253D5B;

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
		color: #444;
		background-color: transparent;
		border-bottom: 1px solid #D0D0D0;
		font-size: 19px;
		font-weight: normal;
		margin: 0 0 14px 0;
		padding: 14px 15px 10px 15px;
		font-family: olivier;
		width: 150px;
	}

	code {
		font-family: Monaco, Courier New, Courier, monospace;
		font-size: 12px;
		background-color: #f9f9f9;
		border: 1px solid #D0D0D0;
		color: #002166;
		display: block;
		margin: 14px 0 14px 0;
		padding: 12px 10px 12px 10px;
	}

	#body {
		margin: 15px 15px 15px 15px;
	}
	#container{
		margin: 100px;
		margin-left: 500px;
		margin-top: 30px;
		border: 1px solid #D0D0D0;
		-webkit-box-shadow: 0 0 8px #D0D0D0;
	}

	table {
    border-collapse: collapse;
	}

	p.footer {
		text-align: right;
		font-size: 11px;
		border-top: 1px solid #D0D0D0;
		line-height: 32px;
		padding: 0 10px 0 10px;
		margin: 20px 0 0 0;
	}

	form{
	font-family: "olivier", cursive, olivier;
	text-align: center;
	font-size: 18px;
	color: black;
	}

	input[type=button], input[type=submit], input[type=reset] {
    background-color: #003399;
    border: none;
    color: white;
    padding: 16px 32px;
    text-decoration: none;
    margin: 5px 2px;
    cursor: pointer;
    width: 90%
	}
	input[type=text] {
    border: none;
    border-bottom: 2px solid violet;
    background-color: transparent; 
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

<div id="container" align="center">
	<h1 align="center">This is Input page</h1>
	<div id="body">
		<a href="<?php echo site_url('welcome') ?>">Kembali</a>
		<form action="<?php echo site_url('welcome/insert') ?>" method="POST">
			<p style="text-align: center;">NIM</p> 
			<input type="text" name="nim" /><br>
			<p style="text-align: center;">Nama Lengkap</p>
			<input type="text" name="nama" /><br>
			<p style="text-align: center;">IP</p>
			<input type="text" name="ip" /><br>
			<input type="submit" name="simpan" value="Simpan" />
		</form>
	</div>

	<p class="footer">Mia Larisa Waskito (G64160038)</p>
</div>

</body>
</html>