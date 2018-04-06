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
		margin: 40px;
		font: 13px/20px normal Helvetica, Arial, sans-serif;
		color: #253D5B;
	}

	a {
		color: #003399;
		background-color: transparent;
		font-weight: normal;
	}

	@font-face{
		font-family: "olivier";
		src: url("assets/olivier/olivier_demo.ttf");
	}

	h1 {
		color: #253D5B;
		background-color: #B79D94;
		border-bottom: 1px solid #D0D0D0;
		font-size: 35px;
		font-weight: normal;
		margin: 0 0 14px 0;
		padding: 14px 15px 10px 15px;
		font-family: olivier;
		width: 170px;

	}

	h3 {
		color: #253D5B;
		border: 5px;
		font-family: olivier;
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

	p.footer {
		text-align: right;
		font-size: 11px;
		border-top: 1px solid #D0D0D0;
		line-height: 32px;
		padding: 0 10px 0 10px;
		margin: 20px 0 0 0;
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
	
	.footer {
    position: fixed;
    left: 0;
    bottom: 0;
    width: 100%;
    background-color: #969696;
    color: white;
    text-align: center;
	}
    table, th, td {
    border: 1px solid black;
    text-align: center;
    font-family: "Comic Sans MS", cursive, sans-serif;
     padding: 5px;
	}
	table {
    width: 90%;
	}

	th {
    height: 20px;
	}
	h4{
		color: black;
		font-size: 25px;
	}
	</style>
</head>
<body>

<div id="container">
	<h1 align="center" width="250px"> Pendataan Akademik Mahasiswa</h1>
	<h3 align="right"><a align=center href="<?php echo site_url('welcome/form_input') ?>" >INPUT YOUR DATA</a></h3>

	<div id="body">
		
		<table border="1" width="60%" align="center">
			<tr bgcolor="#67697C" align="center">
				<td><h4>No</h4></td>
				<td><h4>NIM</h4></td>
				<td><h4>Nama</h4></td>
				<td><h4>IP</h4></td>
				<td><h4>Opsi</h4></td>
			</tr>
			<?php 
			$no = 1;
			foreach($hasil as $r) { ?>
			<tr align="center">
				<td><?php echo $no++ ?></td>
				<td><?php echo $r['nim'] ?></td>
				<td><?php echo $r['nama'] ?></td>
				<td><?php echo $r['ip'] ?></td>
				<td>
					<a href="<?php echo site_url('welcome/form_edit/'.$r['nim']) ?>">Edit</a> ||
					<a href="<?php echo site_url('welcome/delete/'.$r['nim']) ?>" onclick="return confirm('yakin ingin hapus data')">Hapus</a>
				</td>
			</tr>
			<?php } ?>
		</table>
	</div>

	<p class="footer">Mia Larisa Waskito (G64160038) <b><b><b></p>
</div>

</body>  
</html>