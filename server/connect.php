<?php
  class Connection
  {
      protected $servername = 'localhost';
      protected $username = 'root';
      protected $password = '';
      protected $dbname = 'lienquan';
      protected $connect;
      
      function __construct(){
          try{
              $this->connect = new PDO("mysql:host=$this->servername;dbname=$this->dbname",$this->username,$this->password);
              $this->connect->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
              $this->connect->exec('SET NAMES UTF8MB4');
          }
          catch(PDOException $e){
              echo $e->getMessage();
          }
      }
      public function Disconnect(){
          $this->connect = NULL;
      }
  }