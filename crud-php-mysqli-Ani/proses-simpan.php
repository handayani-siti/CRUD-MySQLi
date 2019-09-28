<?php
// Panggil koneksi database
require_once "config/database.php";

if (isset($_POST['simpan'])) {
	$nama          = mysqli_real_escape_string($db, trim($_POST['nama']));
	$username      = mysqli_real_escape_string($db, trim($_POST['username']));
	$password      = mysqli_real_escape_string($db, trim($_POST['password']));
	$email         = mysqli_real_escape_string($db, trim($_POST['email']));

	// perintah query untuk menyimpan data ke tabel
	$query = mysqli_query($db, "INSERT INTO is_siswa(nama,
													 username,
													 password,
													 email)	
											  VALUES('$nama',
													 '$username',
													 '$password',
													 '$email')");		

	// cek hasil query
	if ($query) {
		// jika berhasil tampilkan pesan berhasil insert data
		header('location: index.php?alert=2');
	} else {
		// jika gagal tampilkan pesan kesalahan
		header('location: index.php?alert=1');
	}	
}					
?>