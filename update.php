<?php
include 'koneksi.php';
if (isset($_POST['edit'])){
    $kode=$_POST['kd_barang'];
    $nama=$_POST['nm_barang'];
    $jml=$_POST['jml_barang'];
    $harga=$_POST['harga'];
$sql="UPDATE `tbl_barang` SET `kd_barang`='".$kode."',`nm_barang`='".$nama."',`jml`='".$jml."',`harga`='".$harga."'";
$query=mysqli_query($con, $sql);
}else{
    echo 'gagal';
}

echo "<script language='javascript'> alert ('data sudah di perbarui');
 window.location = 'input.php'</script>";
//echo $sql;
?>