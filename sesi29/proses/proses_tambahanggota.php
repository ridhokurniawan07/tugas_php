<?php
$nama = $_POST['nama'];
$username = $_POST['username'];
$password = $_POST['password'];
$jenis_kelamin = $_POST['sex'];
$telp = $_POST['telp'];
$alamat = $_POST['alamat'];
$email = $_POST['email'];
$role = $_POST['role'];

include "../config.php";

mysqli_query($conn, "INSERT INTO `anggota` (`nama`, `username`, `password`, `sex`, `telp`, `alamat`, `email`, `role`) 
values ('$nama', '$username', '$password', '$jenis_kelamin', '$telp', '$alamat', '$email', '$role'); ");

header("location:../index.php");
