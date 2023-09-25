<?php
error_reporting(0);
//Menampilkan Notif Dengan MEnyimpan Session

function notif(){
     if($_SESSION["TambahData"]){
          echo "<p class='inf text-center  text-light bg-success'><span>".$_SESSION["TambahData"]."</span></p>";
          $_SESSION = [];
          session_unset();
          session_destroy();
     }elseif($_SESSION["EditData"]){
          echo "<p class='inf text-center  text-light bg-success'><span>".$_SESSION["EditData"]."</span></p>";
          $_SESSION = [];
          session_unset();
          session_destroy();
     }elseif($_SESSION["kosong"]){
          echo "<p class='inf text-center  text-light bg-danger'><span>".$_SESSION["kosong"]."</span></p>";
          $_SESSION = [];
          session_unset();
          session_destroy();
     }elseif($_SESSION["BerhasilMenghapus"]){
          echo "<p class='inf text-center text-light bg-success'><span>".$_SESSION["BerhasilMenghapus"]."</span></p>";
          $_SESSION = [];
          session_unset();
          session_destroy();
     }elseif($_SESSION["not_found"]){
          echo "<p class='inf text-center text-light bg-danger'><span>".$_SESSION["not_found"]."</span></p>";
          $_SESSION = [];
          session_unset();
          session_destroy();
     }
}
?>


