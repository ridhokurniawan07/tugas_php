<?php
$isbn = $_POST['isbn'];
$judul = $_POST['judul'];
$tahun = $_POST['tahun'];
$id_penerbit = $_POST['id_penerbit'];
$id_pengarang = $_POST['id_pengarang'];
$id_katalog = $_POST['id_katalog'];
$stok = $_POST['qty_stok'];
$harga = $_POST['harga_pinjam'];

include "../config.php";

mysqli_query($conn, "INSERT INTO `buku` (`isbn`, `judul`, `tahun`, `id_penerbit`, `id_pengarang`, `id_katalog`, `qty_stok`, `harga_pinjam`) 
values ('$isbn', '$judul', '$tahun', '$id_penerbit', '$id_pengarang', '$id_katalog', '$stok', '$harga'); ");

header("location:../buku.php");
