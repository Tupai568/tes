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
            <a class="nav-link active" href="produk.php">Data_Produk</a>
            <a class="nav-link" href="tambah.php">Tambah_Produk</a>
          </div>
        </div>
      </div>
    </nav>

    <section>
    <span><?= notif(); ?></span>
    <h1 class="text-center">Produk</h1> 

      <div class="table-responsive">
        <table
          class="table table-dark table-bordered border-primary text-center"
        >
   
          <tr>
            <th width="10px">No</th>
            <th>NamaProduk</th>
            <th>Kategory</th>
            <th>Harga</th>
            <th>Status</th>
            <th>Edit</th>
          </tr>
          <?= Dpr(); ?>
        </table>
      </div>
    </section>

    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3"
      crossorigin="anonymous"
    ></script>
  </body>
</html>
