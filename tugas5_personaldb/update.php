<?php
include 'connect.php';
$id=$_GET['updateid'];
$sql="Select * from crud where id=$id";
$result=mysqli_query($con,$sql);
$row=mysqli_fetch_assoc($result);
$nama=$row['Nama'];
$umur=$row['Umur'];
$telepon=$row['Telepon'];
$alamat=$row['Alamat'];

if(isset($_POST['submit'])){
    $nama=$_POST['nama'];
    $umur=$_POST['umur'];
    $telepon=$_POST['telepon'];
    $alamat=$_POST['alamat'];

    $sql="update crud set id=$id,nama='$nama', umur=$umur,telepon=$telepon,alamat='$alamat'
    where id=$id";
    $result=mysqli_query($con,$sql);
    if($result){
        echo "Data Berhasil Diubah";
        header('location:display_table.php');
    }else{
        die(mysqli_error($con));
    }
}

?>


<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css">

    <title>Personal Database</title>
  </head>
  <body>
    <div class="container my-5">
        <form method="post">
            <div class="form-group">
                <label>Nama</label>
                <input type="text" class="form-control" placeholder="Masukkan Nama" name="nama" 
                autocomplete="off" value=<?php echo $nama;?>>
            </div>
            <div class="form-group">
                <label>Umur</label>
                <input type="text" class="form-control" placeholder="Masukkan Umur" name="umur" 
                autocomplete="off" value=<?php echo $umur;?>>
            </div>
            <div class="form-group">
                <label>No. Telepon</label>
                <input type="text" class="form-control" placeholder="Masukkan Nomor Telepon" name="telepon" 
                autocomplete="off" value=<?php echo $telepon;?>>
            </div>
            <div class="form-group">
                <label>Alamat</label>
                <input type="text" class="form-control" placeholder="Masukkan Alamat" name="alamat" 
                autocomplete="off" value=<?php echo $alamat;?>>
            </div>
            <button type="submit" class="btn btn-primary" name="submit">Ubah</button>
        </form>
    </div>

    
  </body>
</html>
