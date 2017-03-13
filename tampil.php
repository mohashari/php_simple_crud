<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="bootstrap/css/bootstrap.css">
    <script src="jquery/jquery-3.1.1.min.js"></script>
    <title>APLIKASI INPUT BARANG</title>
<style>
table {
    font-family: arial, sans-serif;
    border-collapse: collapse;
    width: 100%;
}

td, th {
    border: 1px solid #dddddd;
    text-align: left;
    padding: 8px;
}

tr:nth-child(even) {
    background-color: #dddddd;
}
</style>

</head>
<div class="container"
<!-- header -->
<?php
include_once 'header.php';
include_once 'koneksi.php';
 $sql="SELECT * FROM tbl_barang ORDER BY kd_barang DESC";
 $result=mysqli_query($con,$sql);
?>
<!-- content -->
<h2><center>DATA</center></h2>
<table>
<tr>
    <th>KODE BARANG</th>
    <th>NAMA BARANG</th>
    <th>JUMLAH BARANG</th>
    <th>HARGA BARANG</th>
    <th>DELETE</th>
    <th>EDIT</th>
</tr>
<?php 
$i=0;
while ($data=mysqli_fetch_array($result)){
    

   echo "<tr>";
   echo "<td>".$data['kd_barang']."</td>";
    echo "<td>".$data['nm_barang']."</td>";
    echo "<td>".$data['jml']."</td>";
    echo "<td>".$data['harga']."</td>";
    echo "<td><a href='delete.php?kd_barang=$data[kd_barang]'
 class='btn btn-primary btn-xs' onClick='return hapus()'
 title='tombol untuk menghapus data'>
 <span class='glyphicon glyphicon-remove'></span>
 Delete</a></td>";
    echo "<td><a href='edit.php?kd_barang=$data[kd_barang]'
 class='btn btn-primary btn-xs' onClick='return hapus()'
 title='tombol untuk menghapus data'>
 <span class='glyphicon glyphicon-remove'></span>
 EDIT</a></td>";
echo "</tr>";

}
?>
</table>
 <br>
<!-- footer -->
<?php
include_once 'footer.php';
?>
</div>