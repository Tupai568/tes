<?php

class Database{
     private $host = "localhost";
     private $user = "root";
     private $pswd = "";
     private $file = "db_produk";
     public $conn;

     function __construct(){
          $this->conn = new mysqli($this->host, $this->user, $this->pswd, $this->file) or die (mysqli_error());
          if(!$this->conn){
               return false;
          }else{
               return true;
          }
     }
}




?>