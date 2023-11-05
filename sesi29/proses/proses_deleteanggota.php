<?php
include "../config.php";

$id = $_GET['id'];

mysqli_query($conn, "delete  from anggota where id_anggota= $id ");


header("location:../index.php");
