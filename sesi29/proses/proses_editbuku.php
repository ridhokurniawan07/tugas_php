<?php
$isbn = $_GET['isbn'];
$isbn_baru = $_POST['isbn'];
$judul = $_POST['judul'];
$tahun = $_POST['tahun'];
$id_penerbit = $_POST['id_penerbit'];
$id_pengarang = $_POST['id_pengarang'];
$id_katalog = $_POST['id_katalog'];
$stok = $_POST['qty_stok'];
$harga = $_POST['harga_pinjam'];

include "../config.php";

mysqli_query($conn, "UPDATE buku SET  isbn = '$isbn_baru', judul = '$judul', tahun = '$tahun', id_penerbit = '$id_penerbit', 
id_pengarang = '$id_pengarang', id_katalog = '$id_katalog', qty_stok = '$stok', harga_pinjam = '$harga' WHERE isbn = '$isbn'");


header("location:../buku.php");
