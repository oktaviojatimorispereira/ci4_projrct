<?php
include "../../koneksi.php";

$id = $_GET["id"];

$sql = "DELETE FROM user WHERE id_user = $id";

$result = mysqli_query($kon,$sql);

if($result){
    echo"
    <script>
        alert('Berhasil Menghapus Data !');
        document.location.href = '../../../admin/user/user.php';  
    </script>
    ";
}

?>