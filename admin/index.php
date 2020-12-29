<!DOCTYPE html>
<html>
<head>
	<title>Membuat Login Dengan PHP dan MySQLi - WWW.MALASNGODING.COM</title>
</head>
<body>
	<h2>Selamat Datang
 
	<!-- cek apakah sudah login -->
	<?php 
	session_start();
	if($_SESSION['status']!="login"){
		header("location:../index.php?pesan=belum_login");
	}
	?>
	</h2>
<h4>Selamat datang, <?php echo $_SESSION['username']; ?>! anda telah login.</h4>
<p>&nbsp;</p>
<p>&nbsp;</p>
 
	<form action="../upload.php" method="post" enctype="multipart/form-data" name="form1">
	  <table width="699" border="0" align="center">
	    <tr>
	      <td width="225" height="26">Nomor STR</td>
	      <td width="9">:</td>
	      <td width="443"><label for="textfield"></label>
          <input type="text" name="textfield" id="textfield" width="400"></td>
        </tr>
	    <tr>
	      <td>Tanggal STR</td>
	      <td>:</td>
	      <td><label for="textfield2"></label>
	        <label for="textfield2"></label>
          <input type="text" name="textfield2" id="textfield2"></td>
        </tr>
	    <tr>
	      <td>Masa Berlaku STR</td>
	      <td>:</td>
	      <td><label for="textfield3"></label>
          <input type="text" name="textfield3" id="textfield3"></td>
        </tr>
	    <tr>
	      <td>Upload File</td>
	      <td>:</td>
	      <td><label for="fileField"></label>
          <input type="file" name="fileField" id="fileField"></td>
        </tr>
	    <tr>
	      <td>&nbsp;</td>
	      <td>&nbsp;</td>
	      <td>&nbsp;</td>
        </tr>
	    <tr>
	      <td>&nbsp;</td>
	      <td>&nbsp;</td>
	      <td><input type="submit" name="button" id="button" value="Simpan">
	        <input type="reset" name="batal" id="batal" value="Batal"></td>
        </tr>
      </table>
</form>
	<p>&nbsp;</p>
	<p>&nbsp;</p>
	<p>&nbsp;</p>
	<p><br/>
	  <br/>
	  
	  <a href="logout.php">LOGOUT</a></p>
</body>
</html>