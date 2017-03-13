<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="bootstrap/css/bootstrap.css">
    <script src="jquery/jquery-3.1.1.min.js"></script>
    <title>APLIKASI INPUT BARANG</title>
</head>

<div class="container">
<?php
include_once 'header.php';
include 'koneksi.php';
$kd_barang=$_GET['kd_barang'];
$sql="SELECT * FROM tbl_barang WHERE kd_barang=$kd_barang";
$query=mysqli_query($con, $sql);
//print $sql;
while($row =mysqli_fetch_array($query)){
    $nama=$row['nm_barang'];
    $jml=$row['jml'];
    $harga=$row['harga'];
}?>



<!-- container -->
 <!-- form -->
 <h2><center>EDIT DATA</center></h2>
    <form class="form-horizontal" action="update.php" method="POST"> 
        
        <div class="form-group">
            <!--<label class="control-label col-sm-2">KODE BARANG</label>-->
            <div class="col-sm-10">
                <input type="hidden" class="form-control" name="kd_barang" value="<?php echo $kode; ?>">
            </div>
        </div>
        <div class="form-group">
            <label class="control-label col-sm-2">NAMA BARANG</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name="nm_barang" value="<?php echo $nama; ?>">
            </div>
        </div>
        <div class="form-group">
            <label class="control-label col-sm-2">JUMLAH  BARANG</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name="jml_barang" value="<?php echo $jml; ?>">
            </div>
        </div>
        <div class="form-group">
            <label class="control-label col-sm-2">HARGA</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name="harga" value="<?php echo $harga;    ?>" >
            </div>
        </div> 
        <input type="submit" class="btn btn btn-success btn-lg" value="EDIT" name="edit">
        
    </form>

<!-- footer -->
<?php
include_once 'footer.php'
?>
</div>
</html>