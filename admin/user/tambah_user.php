
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../pict/apotekundira.png">

    <title>Tambah Data User | Admin Page</title>

    <link rel="canonical" href="../../bs4/docs/4.0/examples/sign-in/signin.css">

    <!-- Bootstrap core CSS -->
    <link href="../../bs4/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="../../bs4/docs/4.0/examples/sign-in/signin.css" rel="stylesheet">
  </head>

  <body class="text-center">
    <form class="form-signin" method="post" action="../../proses/admin_proses/user_proses/insert_user.php">
 
      <h3 class="mt-5 font-weight-normal">Tambah Data User</h3>
      
      <div class="mt-3 mb-2">
     
      <label for="inputText" class="float-left">Nama </label>
      <input type="text" name="usname" id="inputText" class="form-control" placeholder="contoh : FransiskusGatot" required>
      
      <label for="inputNumber" class="float-left">Umur</label>
      <input type="number" name="umnum" id="inputNumber" class="form-control" placeholder="contoh : 22" required>
      
      <label for="exampleFormControlSelect1" class="float-left">Jenis Kelamin</label>
            <select name="jkuser" class="form-control" id="exampleFormControlSelect1">
                <option selected>.....</option>
                <option>Laki- laki</option>
                <option>Perempuan</option>
            </select>
    
        <label for="exampleFormControlTextarea1" class="float-left">Alamat</label>
        <textarea class="form-control" name="alus" id="exampleFormControlTextarea1" rows="1"></textarea>

      <label for="inputPassword" class="float-left">Password</label>
      <input name="pasus" type="password" id="inputPassword" class="form-control" placeholder="contoh : frans22" required>

      <label for="exampleFormControlSelect2" class="float-left">Status</label>
            <select name="staus" class="form-control" id="exampleFormControlSelect2">
                <option selected>.....</option>
                <option>Admin</option>
                <option>User</option>
            </select>
    
    </div>
    <button class="btn btn-lg btn-primary btn-block float-right mr-2 mt-2 mb-2" type="submit">Tambah Data [+]</button>
    <a href="user.php" class="btn btn-lg btn-danger btn-block float-right mr-2 mt-2 mb-2">Batal [x]</a>  
    <p class="mt-5 mb-3 text-muted">&copy; 7'OneTeams 2024</p>
    </form>
  </body>
</html>
