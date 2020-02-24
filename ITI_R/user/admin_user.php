<?php
class User{
 
    // database connection and table name
    private $conn;
    private $table_name = "admin";
    private $table_student = "student_login";
 
    // object properties
    public $id;
    public $username;
    public $password;
 
    // constructor with $db as database connection
    public function __construct($db){
        $this->conn = $db;
    }
    // signup user
   
    // login user
    function login(){
        // select all query
        $query = "SELECT
                    `id`, `username`, `password`,`name`
                FROM
                    " . $this->table_name . " 
                WHERE
                    username='".$this->username."' AND password='".$this->password."'";
        // prepare query statement
                    //echo $query;
        $stmt = $this->conn->prepare($query);
        // execute query
        $stmt->execute();
        return $stmt;
    }


        function login_student(){
        // select all query
        $query = "SELECT
                    `id`, `username`, `password`,`name`
                FROM
                    " . $this->table_student . " 
                WHERE
                    username='".$this->username."' AND password='".$this->password."'";
        // prepare query statement
                    //echo $query;
        $stmt = $this->conn->prepare($query);
        // execute query
        $stmt->execute();
        return $stmt;
    }
 
}