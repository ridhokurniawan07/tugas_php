<?php
$id = $_GET['id'];
$nama = $_POST['nama'];
$username = $_POST['username'];
$password = $_POST['password'];
$jenis_kelamin = $_POST['sex'];
$telp = $_POST['telp'];
$alamat = $_POST['alamat'];
$email = $_POST['email'];
$role = $_POST['role'];

include "../config.php";

mysqli_query($conn, "UPDATE anggota SET nama = '$nama', username = '$username', password = '$password', sex = '$jenis_kelamin', 
telp = '$telp', alamat = '$alamat', email = '$email', role = '$role' WHERE id_anggota = '$id'");


header("location:../index.php");
