
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="pict/apotekundira.png">

    <title>Registrasi Page | Apotek Undira</title>

    <link rel="canonical" href="bs4/docs/4.0/examples/sign-in/signin.css">

    <!-- Bootstrap core CSS -->
    <link href="bs4/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="bs4/docs/4.0/examples/sign-in/signin.css" rel="stylesheet">
  </head>

  <body class="text-center">
    <form class="form-signin" method="post" action="proses/register_proses.php">

    <h3 class="mt-5 font-weight-normal">Daftar Akun </h3>
      
    <div class="mt-4 mb-2">
      <label for="inputText" class="float-left">Nama </label>
      <input type="text" id="inputText" class="form-control" placeholder="contoh : FransiskusGatot" name="usname" required>
      
      <label for="inputNumber" class="float-left">Umur</label>
      <input type="number" id="inputNumber" class="form-control" placeholder="contoh : 22" name="umnum" required>
      
      <label for="exampleFormControlSelect1" class="float-left">Jenis Kelamin</label>
            <select class="form-control" id="exampleFormControlSelect1" name="jkuser">
                <option selected>.....</option>
                <option>Laki- laki</option>
                <option>Perempuan</option>
            </select>
    
      <div class="form-group">
        <label for="exampleFormControlTextarea1">Alamat</label>
        <textarea class="form-control" id="exampleFormControlTextarea1" rows="1" name="alus"></textarea>
      </div>

      <label for="inputPassword" class="float-left">Password</label>
      <input type="password" id="inputPassword" class="form-control" placeholder="contoh : frans22" name="pasus" required>

    </div>
    <button class="btn btn-lg btn-success btn-block float-right mr-2 mt-2 mb-2">Daftar [V]</button>
    <p class="mt-2 mb-2 text-muted">
        Sudah Punya Akun Terdaftar ? <a href="login.php" >Klik Disini</a>
    </p>  
    <p class="mt-5 mb-3 text-muted">&copy; 7'OneTeams 2024</p>
    </form>
  </body>
</html>
