<?php 
if($_POST['simpan']) {
	$Nama = $_POST['nama'];
	$Alamat = $_POST['alamat'];
	
	$myfile = fopen("database/list.txt", "a+") or die("Unable to open file!");

	$txt = "$Nama : $Alamat\n";
	
	fwrite($myfile, $txt);
	fclose($myfile);
	header('location:list.php');
}
?>