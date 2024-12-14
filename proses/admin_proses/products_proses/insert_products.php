<?php
include "../../koneksi.php";

$na = $_POST['nmb'];
$je = $_POST['jnb'];
$be = $_POST['bob'];
$pro = $_POST['prb'];
$sto = $_POST['stb'];

$sql = "INSERT INTO obat VALUES ('','$na','$je','$be','$pro','$sto')"; 

$query = mysqli_query($kon,$sql);

header("location:../../../admin/products/products.php");
?>