<?php

$con=new mysqli('localhost:3308','root','q2e4t6u8','personaldb');

if(!$con){
    die(mysqli_error($con));
}
/*if($con){
    echo "Koneksi Sukses";
}else{
    die(mysqli_error($con));
}*/
?>