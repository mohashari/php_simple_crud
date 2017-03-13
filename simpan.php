<?php
include 'koneksi.php';

$data= array($_POST['nm_barang'],$_POST['jml_barang'],$_POST['harga']);

$sql= "INSERT INTO tbl_barang (nm_barang, jml, harga) VALUES (
'".$data[0]."',
'".$data[1]."',
'".$data[2]."')";
mysqli_query($con, $sql);
echo '<META HTTP-EQUIV="Refresh" Content="0; URL=input.php">';
echo "<script language='javascript'> alert ('data sudah di simpan');
 window.location = 'input.php'</script>";
//print $sql;
?>