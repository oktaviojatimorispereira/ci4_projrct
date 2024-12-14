
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../pict/apotekundira.png">

    <title>Update User | Admin Page</title>

    <link rel="canonical" href="../../bs4/docs/4.0/examples/sign-in/signin.css">

    <!-- Bootstrap core CSS -->
    <link href="../../bs4/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="../../bs4/docs/4.0/examples/sign-in/signin.css" rel="stylesheet">
  </head>

  <body class="text-center">
    <form class="form-signin">
      
    <h3 class="mt-5 font-weight-normal">Update Data User</h3>
      
      <div class="mt-3 mb-2">
      <?php
            require "../../proses/koneksi.php";
            $sql = "SELECT * FROM user WHERE id_user = $_GET[id]";
            $query = mysqli_query($kon, $sql);
            foreach ($query as $row) :
      ?>
      <label for="inputText" class="float-left">Nama </label>
      <input type="text" id="inputText" class="form-control" placeholder="contoh : FransiskusGatot" value="<?= $row['username'];?>" required>
      
      <label for="inputNumber" class="float-left">Umur</label>
      <input type="number" id="inputNumber" class="form-control" placeholder="contoh : 22" value="<?= $row['umur_user'];?>" required>
      
      <label for="exampleFormControlSelect1" class="float-left">Jenis Kelamin</label>
            <select class="form-control" id="exampleFormControlSelect1" value="<?= $row['jk_user'];?>">
                <option selected>.....</option>
                <option>Laki- laki</option>
                <option>Perempuan</option>
            </select>
    
      <div class="form-group">
        <label for="exampleFormControlTextarea1">Alamat</label>
        <textarea class="form-control" id="exampleFormControlTextarea1" rows="1" value="<?= $row['alamat_user'];?>"></textarea>
      </div>

      <label for="inputPassword" class="float-left">Password</label>
      <input type="text" id="inputPassword" class="form-control" placeholder="contoh : frans22" value="<?= $row['password'];?>" required>
      
      
      <label for="exampleFormControlSelect2" class="float-left">Status</label>
            <select name="staus" class="form-control" id="exampleFormControlSelect2" value="<?= $row['status_user'];?>">
                <option selected>.....</option>
                <option>Admin</option>
                <option>User</option>
      </select>

      <?php endforeach; ?>
    </div>
    <a href="user.php" class="btn btn-lg btn-success btn-block float-right mr-2 mt-2 mb-2">Update Data [v]</a>
    <a href="user.php" class="btn btn-lg btn-danger btn-block float-right mr-2 mt-2 mb-2">Batal [x]</a>  
    <p class="mt-5 mb-3 text-muted">&copy; 7'OneTeams 2024</p>
    </form>
  </body>
</html>
