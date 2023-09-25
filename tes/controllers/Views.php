<?php
class Data extends Database{
     protected $sql = "SELECT * FROM produk INNER JOIN kategori ON produk.kategori_id = kategori.id_kategori INNER JOIN status ON produk.status_id = status.id_status";
     

     //menampilkan data kategori
     function kategori(){
          $sql = "SELECT * FROM kategori WHERE id_kategori";
          $query = $this->conn->query($sql) or die ("Error: ".$this->conn->error);;
          return $query;
     }

     //menampilkan data status
     function status(){
          $sql = "SELECT * FROM status WHERE id_status";
          $query = $this->conn->query($sql) or die ("Error: ".$this->conn->error);;
          return $query;
     }

     //menampilkan semua data
     function data(){
          $sql = $this->sql;
          $query = $this->conn->query($sql) or die ("Error: ".$this->conn->error);;
          return $query;
     }

     //menampilkan data yang punya status bisa dibeli
     function buy(){
          $sql = $this->sql." WHERE status.nama_status = 'bisa dijual'";
          $query = $this->conn->query($sql) or die ("Error: ".$this->conn->error);;
          return $query;
     }

     //menampilkan data produk yang dikirim lewat get id
     function tempProduk(){
          $id = $this->conn->real_escape_string($_GET["id"]);
          $sql = $this->sql." WHERE produk.id_produk = '{$id}'";
          $query = $this->conn->query($sql) or die ("Error: ".$this->conn->error);;
          return $query;
     }


     //menambah data
     function MenambahData($one, $two, $try, $four){
          $nama = $this->conn->real_escape_string($_POST["{$one}"]);
          $harga = $this->conn->real_escape_string($_POST["{$two}"]);
          $kategori = $this->conn->real_escape_string($_POST["{$try}"]);
          $status = $this->conn->real_escape_string($_POST["{$four}"]);
          $sql = "INSERT INTO produk VALUE (NULL, '{$nama}', '{$harga}', '{$kategori}', '{$status}')";
          if(!empty($nama) && !empty($harga) && $kategori !== "Open this select menu" && $status !== "Open this select menu"){
               $query = $this->conn->query($sql) or die ("Error: ".$this->conn->error);
               return $query;    
          }else{
               return false;
          }
     }

     //update data
     function edit($one, $two, $try, $four){
          $nama = $this->conn->real_escape_string($_POST["{$one}"]);
          $harga = $this->conn->real_escape_string($_POST["{$two}"]);
          $kategori = $this->conn->real_escape_string($_POST["{$try}"]);
          $status = $this->conn->real_escape_string($_POST["{$four}"]);
          $id = $this->conn->real_escape_string($_GET["id"]);
          $sql = "UPDATE produk SET nama_produk = '{$nama}', harga = '{$harga}', kategori_id = '{$kategori}', status_id = '{$status}' WHERE id_produk = '{$id}'";
          if(!empty($nama) && !empty($harga) && $kategori !== "Open this select menu" && $status !== "Open this select menu"){
               $query = $this->conn->query($sql) or die ("Error: ".$this->conn->error);
               return $query;    
          }else{
               return false;
          }

     }

     //menampilkan data produk sambil mengecek del
     function produk(){
          $del = $this->conn->real_escape_string($_GET["del"]);
          $sql = "SELECT * FROM produk WHERE id_produk = '{$del}'";
          $query = $this->conn->query($sql) or die ("Error: ".$this->conn->error);;
          return $query;
     }

     //menghapus data
     function MenghapusData(){
          $del = $this->conn->real_escape_string($_GET["del"]);
          $sql = "DELETE FROM produk WHERE id_produk = '{$del}'";
          $query = $this->conn->query($sql) or die ("Error: ".$this->conn->error);
          return $query;   

     }

}

$menu = new Data();
$parms = $menu->data();
$kategori = $menu->kategori();
$status = $menu->status();
$buy = $menu->buy();




