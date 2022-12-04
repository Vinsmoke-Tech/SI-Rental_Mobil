<?php
include('includes/config.php');
error_reporting(0);
$id = $_POST['id'];
$nik = $_POST['nik'];
$nama_sopir = $_POST['nama_sopir'];
$alamat = $_POST['alamat'];
$no_hp = $_POST['no_hp'];

$sql="UPDATE sopir 
        SET nik = '$nik',
            nama_sopir = '$nama_sopir',
            alamat = '$alamat',
            no_hp = '$no_hp'
        WHERE id_sopir = '$id'";

$query 	= mysqli_query($koneksidb,$sql);

if($query){
	echo "<script type='text/javascript'>
			alert('Berhasil edit data.'); 
			document.location = 'sopir.php'; 
		</script>";
}else {
    echo "No Error : ".mysqli_errno($koneksidb);
    echo "<br/>";
    echo "Pesan Error : ".mysqli_error($koneksidb);

	echo "<script type='text/javascript'>
			alert('Terjadi kesalahan, silahkan coba lagi!.'); 
			document.location = 'sopiredit.php?id=$id'; 
		</script>";
}
?>