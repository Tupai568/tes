<?php
require_once "../controllers/init.php";

?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Home</title>
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi"
      crossorigin="anonymous"
    />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Akaya+Kanadaka&family=Akronim&family=Alumni+Sans+Inline+One&display=swap"
      rel="stylesheet"
    />
    <link rel="stylesheet" href="../css/style.css" />
  </head>
  <body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark p-2 fixed-top">
      <div class="container-fluid">
        <a class="navbar-brand" href="../index.php">Navbar</a>
        <button
          class="navbar-toggler"
          type="button"
          data-bs-toggle="collapse"
          data-bs-target="#navbarNavAltMarkup"
          aria-controls="navbarNavAltMarkup"
          aria-expanded="false"
          aria-label="Toggle navigation"
        >
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
          <div class="navbar-nav">
            <a class="nav-link" aria-current="page" href="../index.php"
              >Bisa_Dijual</a
            >
            <a class="nav-link" href="produk.php">Data_Produk</a>
            <a class="nav-link" href="tambah.php">Tambah_Produk</a>
          </div>
        </div>
      </div>
    </nav>

    <section>
      <h1 class="text-center mb-3">EDIT</h1>
      <div class="BOX text-center text-light">
      <form action="" method="post" class="bg-dark"> 
          <div class="mb-3">
                <label for="NamaProduk" class="form-label">Produk</label>
                <input
                  type="text"
                  name="nama" 
                  class="form-control"
                  id="NamaProduk"
                  value="<?= $temProduk["nama_produk"] ?>"
                  placeholder="NamaProduk"
                />
              </div>
              <div class="mb-3">
                <label for="Harga" class="form-label">Harga</label>
                <input
                  type="number"
                  name="harga" 
                  value="<?= $temProduk["harga"] ?>"
                  class="form-control"
                  id="Harga"
                  placeholder="Harga"
                />
              </div>
              <div class="mb-3">
                <label for="kategori" class="form-label">kategori</label>
                <select class="form-select" name="kategori" id="kategori" aria-label="kategori">
                  <option selected>Open this select menu</option>
                  <?php
                    while($res = $kategori->fetch_assoc()):
                  ?>
                  <option value="<?= $res["id_kategori"] ?>" <?= ($res["id_kategori"] == $temProduk["id_kategori"])? 'selected':''; ?> ><?= $res["nama_kategori"] ?></option>
                  <?php endwhile ?>
                </select>
              </div>
              <div class="mb-5">
                <label for="status" class="form-label">status</label>
                <select class="form-select" name="status" id="status" aria-label="status">
                  <option selected>Open this select menu</option>
                  <?php
                    while($stts = $status->fetch_assoc()):
                  ?>
                  <option value="<?= $stts["id_status"] ?>" <?= ($stts["id_status"] == $temProduk["id_status"])? 'selected':''; ?> ><?= $stts["nama_status"] ?></option>
                  <?php endwhile ?>
                </select>
              </div>
          <button type="submit" name="Eproduk" class="btn btn-primary">Submit</button>
      </form>
      </div>
    </section>
  

    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3"
      crossorigin="anonymous"
    ></script>
  </body>
</html>

