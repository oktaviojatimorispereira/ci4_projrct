<?php
include "koneksi.php";

$name = $_POST['usname'];
$umur = $_POST['umnum'];
$jk = $_POST['jkuser'];
$alamat = $_POST['alus'];
$pass = $_POST['pasus'];

$sql = "INSERT INTO user VALUES ('','$name','$umur','$jk','$alamat','$pass')"; 

$query = mysqli_query($kon,$sql);

header("location:../login.php");
