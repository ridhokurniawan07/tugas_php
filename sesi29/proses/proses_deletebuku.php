<?php
include "../config.php";

$isbn = $_GET['isbn'];

mysqli_query($conn, "DELETE FROM buku WHERE isbn = '$isbn'");


header("location:../buku.php");
