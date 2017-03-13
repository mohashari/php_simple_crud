<?php
include 'koneksi.php';
$kd_barang= $_GET['kd_barang'];
$sql="DELETE FROM tbl_barang WHERE kd_barang=$kd_barang";
$result=mysqli_query($con,$sql);
//print $sql;

echo "<script language='javascript'> alert ('data sudah di hapus');
 window.location = 'input.php'</script>";

?>