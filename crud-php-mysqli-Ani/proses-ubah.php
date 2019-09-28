<?php
// Panggil koneksi database
require_once "config/database.php";

if (isset($_POST['simpan'])) {
	if (isset($_POST['nama'])) {
	$nama          = mysqli_real_escape_string($db, trim($_POST['nama']));
	$username      = mysqli_real_escape_string($db, trim($_POST['username']));
	$password      = mysqli_real_escape_string($db, trim($_POST['password']));
	$email         = mysqli_real_escape_string($db, trim($_POST['email']));

		// perintah query untuk mengubah data pada tabel 
		$query = mysqli_query($db, "UPDATE is_siswa SET username    	= '$username',
														password    	= '$password',
														email       	= '$email',
												  WHERE nama 			= '$nama'");		

		// cek query
		if ($query) {
			// jika berhasil tampilkan pesan berhasil update data
			header('location: index.php?alert=3');
		} else {
			// jika gagal tampilkan pesan kesalahan
			header('location: index.php?alert=1');
		}	
	}
}					
?>