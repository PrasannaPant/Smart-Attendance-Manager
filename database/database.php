<?php
class Database
{
    private $servername = "localhost";  //SERVER NAME
    private $username = "root";         //USERNAME FOR THE DATABASE
    private $password = "";             //PASSWORD FOR THE DATABASE
    private $dbname = "attendance_db";  //DATABASE NAME
    
    public  $conn=null;   //VARIABLE TO HOLD DATABASE CONNECTION
    
    public  function __construct() {
        try {
          //CREATE A NEW PDO(php data object) INSTANCE TO CONNECT TO THE DATABASE
           $this->conn = new PDO("mysql:host=$this->servername;dbname=$this->dbname", $this->username, $this->password);
            // set the PDO error mode to exception
            $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            //echo "Connected successfully";
          } catch(PDOException $e) {
            echo "Connection failed: " . $e->getMessage();
          }
    }
}

?>
