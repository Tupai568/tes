<?php
session_start();
require_once "Controllers.php";
require_once "Views.php";
require_once "notif.php";


if(isset($_POST["Tproduk"])){
     global $menu;
     $query = $menu->MenambahData("nama", "harga", "kategori", "status");
     if($query){
         $_SESSION["TambahData"] = "Tambah Data Sucsess";    
     }else{
          $_SESSION["kosong"] = "Ada Data Yang Belum Diisi"; 
     }
}elseif(isset($_POST["Eproduk"])){
     global $menu;
     $query = $menu->edit("nama", "harga", "kategori", "status");
     if($query){
         $_SESSION["EditData"] = "Edit Data Sucsess";
         header("Location: produk.php");    
     }else{
          $_SESSION["kosong"] = "Ada Data Yang Belum Diisi"; 
         header("Location: produk.php");    

     }
}elseif(isset($_GET["id"])){
     global $menu;
     if($menu->tempProduk()->num_rows > 0){
          $temProduk = $menu->tempProduk()->fetch_assoc();
     }else{
          $_SESSION["not_found"] = "Data Tidak Ditemukan";
          header("Location: produk.php");
     }
}
?>




<?php
function sell(){
     global $buy;
     $number = 1;
     while($res = $buy->fetch_assoc()){
?>
     <tr>
          <td><?= $number++ ?></td>
          <td><?= $res["nama_produk"] ?></td>
          <td><?= $res["nama_kategori"] ?></td>
          <td><?= $res["harga"] ?></td>
          <td><?= $res["nama_status"] ?></td>
     </tr>
<?php 
     }
}
?>

<?php
     function Dpr(){
          global $parms;
          $number = 1;
          while($result = $parms->fetch_assoc()){
?>
          <tr>
            <td><?= $number++; ?></td>
            <td><?= $result["nama_produk"] ?></td>
            <td><?= $result["nama_kategori"] ?></td>
            <td><?= $result["harga"] ?></td>
            <td><?= $result["nama_status"] ?></td>
            <td><a href="edit.php?id=<?= $result["id_produk"] ?>" class="E">edit</a> | <a href="del.php?del=<?= $result["id_produk"] ?>" onclick="return confirm('Yakin Ingin Hapus?')" class="D">del</a></td>
          </tr>
<?php } } ?>