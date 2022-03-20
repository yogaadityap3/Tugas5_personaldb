<?php
include 'connect.php';

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Personal Database</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css">

</head>
<body>
    
    <div class="container">
        <button class="btn btn-primary my-5"> 
            <a href="user.php" class="text-light">Tambah User</a>
        </button>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">Nama</th>
                    <th scope="col">Umur</th>
                    <th scope="col">No. telepon</th>
                    <th scope="col">Alamat</th>
                    <th scope="col">Opsi</th>
                </tr>
            </thead>
            <tbody>

            <?php
            
            $sql="Select * from crud";
            $result=mysqli_query($con,$sql);
            if($result){
                while ($row=mysqli_fetch_assoc($result)){
                    $id=$row['id'];
                    $nama=$row['Nama'];
                    $umur=$row['Umur'];
                    $telepon=$row['Telepon'];
                    $alamat=$row['Alamat'];
                    echo 
                    '<tr>
                        <th scope="row">'.$id.'</th>
                        <td>'.$nama.'</td>
                        <td>'.$umur.'</td>
                        <td>'.$telepon.'</td>
                        <td>'.$alamat.'</td>
                        <td>
                        <button class="btn btn-primary"><a href="update.php?updateid='.$id.'" 
                        class="text-light">Ubah</a></button>
                        <button class="btn btn-danger"><a href="delete.php?deleteid='.$id.'" 
                        class="text-light">Hapus</a></button>
                        
                        </td>
                    </tr>';
                }
                
            }

            ?>



                <!-- <tr>
                    <th scope="row">1</th>
                    <td>Mark</td>
                    <td>Otto</td>
                    <td>@mdo</td>
                </tr>
                <tr>
                    <th scope="row">2</th>
                    <td>Jacob</td>
                    <td>Thornton</td>
                    <td>@fat</td>
                </tr>
                <tr>
                    <th scope="row">3</th>
                    <td>Larry</td>
                    <td>the Bird</td>
                    <td>@twitter</td>
                </tr> -->
            </tbody>
        </table>
    </div>

</body>
</html>