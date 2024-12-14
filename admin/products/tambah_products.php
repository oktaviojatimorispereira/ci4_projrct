
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../pict/apotekundira.png">

    <title>Tambah Data Product | Admin Page</title>

    <link rel="canonical" href="../../bs4/docs/4.0/examples/sign-in/signin.css">

    <!-- Bootstrap core CSS -->
    <link href="../../bs4/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="../../bs4/docs/4.0/examples/sign-in/signin.css" rel="stylesheet">
  </head>

  <body class="text-center">
    <form class="form-signin" action="../../proses/admin_proses/products_proses/insert_products.php" method="post">
 
      <h3 class="mt-5 font-weight-normal">Tambah Data Obat</h3>
      
      <div class="mt-3 mb-2">
      <label class="float-left">Nama Obat</label>
      <input type="text" name="nmb" class="form-control" placeholder="contoh : Ambroxol HCL">
      
      <label class="float-left">Jenis Obat</label>
      <input type="text" name="jnb" class="form-control" placeholder="contoh : generik">
     
      <label class="float-left">Bentuk Obat</label>
            <select class="form-control" name="bob">
                <option selected>.....</option>
                <option>Sirup</option>
                <option>Puyer</option>
                <option>Kapsul</option>
                <option>Tablet/Kaplet</option>
            </select>
           

      <label class="float-left">Perusahaan Produksi</label>
      <input type="text" name="prb" class="form-control" placeholder="contoh : generik">

      <label class="float-left">Jumlah Stok / Strip</label>
      <input type="number" name="stb" class="form-control" placeholder="contoh : 100">
      
    </div>
    <button type="submit" class="btn btn-lg btn-primary btn-block float-right mr-2 mt-2 mb-2">Tambahkan [+]</button>
    <a href="products.php" class="btn btn-lg btn-danger btn-block float-right mr-2 mt-2 mb-2">Batal [x]</a>  
    <p class="mt-5 mb-3 text-muted">&copy; 7'OneTeams 2024</p>
    </form>
  </body>
</html>
