<?php
include "../config.php";

$id = $_GET['id'];

mysqli_query($conn, "delete  from penerbit where id_penerbit= '$id' ");


header("location:../penerbit.php");
