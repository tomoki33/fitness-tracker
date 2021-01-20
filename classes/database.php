<?php
session_start();
class Database{
    private $servername ='localhost';
    private $username ='root';
    private $password ='root';
    private $dbName ='fitness';
    public $conn;


    // consructer automatcally execute when you creatae your object 
    public function __construct(){
        $this->conn = new mysqli($this->servername, $this->username,$this->password, $this->dbName);

        if($this->conn== TRUE)
            return $this->conn;
        else{
            die('Error' .$this->conn->connect_error);
        }
    }
}
?>
