<?php
include 'koneksi.php';
$id_user = $_GET['id_user'];
//echo $id

//memberikan perintah sql
$sql ="delete from user where id_user = '".$id_user."'" ;

$result = mysqli_query($connect,$sql);

if ($result) {
    header('Location:list-user.php');
} else {

    printf('Gagal ya'.mysqli_error($connect));
    exit();
}

?>
