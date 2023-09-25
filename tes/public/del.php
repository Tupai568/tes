<?php
require_once "../controllers/init.php";
if(isset($_GET["del"])){
     $cek = $menu->produk()->num_rows;
     if($cek > 0){
          $cek = $menu->MenghapusData();
          $_SESSION["BerhasilMenghapus"] = "Berhasil Menghapus Data";
          header("Location: produk.php");
     }else{
          echo "<script>alert('Tidak Ada User Yang Terdaftar')</script>";
     }
}
?>