<?php
session_start();
error_reporting(0);
include('includes/config.php');

if(strlen($_SESSION['alogin'])==0){	
    header('location:index.php');
}
else{
    if(isset($_GET['id'])){
        // declare variable id
        $id	= $_GET['id'];

        // proses query delete
        $mySql	= "DELETE 
                    FROM sopir
                    WHERE id_sopir = '$id'";
        $myQry	= mysqli_query($koneksidb, $mySql);
        
        // notif error
        echo "<script type='text/javascript'>
                alert('Data berhasil dihapus.'); 
                document.location = 'sopir.php'; 
            </script>";
    }else {
        echo "No Error : ".mysqli_errno($koneksidb);
        echo "<br/>";
        echo "Pesan Error : ".mysqli_error($koneksidb);

        echo "<script type='text/javascript'>
                alert('Terjadi kesalahan, silahkan coba lagi!.'); 
                document.location = 'sopir.php'; 
            </script>";
    }
}
?>