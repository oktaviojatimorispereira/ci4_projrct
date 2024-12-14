<?php
include "../../koneksi.php";

$name = $_POST['usname'];
$umur = $_POST['umnum'];
$jk = $_POST['jkuser'];
$alamat = $_POST['alus'];
$pass = $_POST['pasus'];
$status = $_POST['staus'];

$sql = "INSERT INTO user VALUES ('','$name','$umur','$jk','$alamat','$pass','$status')"; 

$query = mysqli_query($kon,$sql);

header("location:../../../admin/user/user.php");
?>