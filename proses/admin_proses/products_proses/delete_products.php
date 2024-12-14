<?php
include "../../koneksi.php";

$id = $_GET["id"];

$sql = "DELETE FROM obat WHERE id_obat = $id";

$result = mysqli_query($kon,$sql);

if($result){
    echo"
    <script>
        alert('Berhasil Menghapus Data !');
        document.location.href = '../../../admin/products/products.php';  
    </script>
    ";
}

?>