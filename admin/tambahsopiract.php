<?php
include('includes/config.php');
error_reporting(0);

// declare input values
$nik = $_POST['nik'];
$nama = $_POST['nama_sopir'];
$alamat = $_POST['alamat'];
$no_hp = $_POST['no_hp'];

// proses query insert
$sql 	= "INSERT INTO sopir (nik,nama_sopir,alamat,no_hp) VALUES ('$nik','$nama','$alamat','$no_hp')";

$query 	= mysqli_query($koneksidb, $sql);

// validasi error
if($query){
	echo "<script type='text/javascript'>
			alert('Berhasil tambah data.'); 
			document.location = 'sopir.php'; 
		</script>";
}else {
    echo "No Error : ".mysqli_errno($koneksidb);
    echo "<br/>";
    echo "Pesan Error : ".mysqli_error($koneksidb);

	echo "<script type='text/javascript'>
			alert('Terjadi kesalahan, silahkan coba lagi!.'); 
			document.location = 'tambahsopir.php'; 
		</script>";
}

?>