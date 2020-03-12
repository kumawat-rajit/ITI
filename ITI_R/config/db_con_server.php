<?php
class Database{
 
    // specify your own database credentials
    private $host = "162.241.85.56";
    private $db_name = "roopr7th_roop_rajat_iti";
    private $username = "roopr7th_roopraj";
    private $password = "rooprajat";
    public $conn;
 
    // get the database connection
    public function getConnection(){
 
        $this->conn = null;
 
        try{
            $this->conn = new PDO("mysql:host=" . $this->host . ";dbname=" . $this->db_name, $this->username, $this->password);
            
            }catch(PDOException $exception){
            echo "Connection error: " . $exception->getMessage();
        }
 
        return $this->conn;
    }
}
?>