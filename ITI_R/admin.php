<?php
// include database and object files
include_once 'config/db_con.php';
include_once 'user/admin_user.php';
 session_start();
// get database connection
$database = new Database();
$db = $database->getConnection();
 
// prepare user object
$user = new User($db);
//print_r($_POST);
// set ID property of user to be edited
$user->username = isset($_POST['username']) ? $_POST['username'] : die();
$user->password = isset($_POST['password']) ? $_POST['password'] : die();
// read the details of user to be edited
//echo $user->username;
//echo $user->password;


$stmt = $user->login();
if($stmt->rowCount() > 0){
    // get retrieved row
    $row = $stmt->fetch(PDO::FETCH_ASSOC);
    // create array
    $user_arr=array(
        "status" => true,
        "message" => "Successfully Login!",
        "id" => $row['id'],
        "username" => $row['username']
    );

// Always start this first
     
    $_SESSION["id"] = $row['id'];
    $_SESSION["username"] = $row['username'];
    $_SESSION["name"] = $row['name'];
    unset($_SESSION["error"]);
     header("Location: admin-home.php"); 
    exit;
}
else{
    $user_arr=array(
        "status" => false,
        "message" => "Invalid Username or Password!",
    );
  $error = "Invalid Username or Password!";
 $_SESSION["error"] = $error;
 header("Location: admin-login.php"); 
}
// make it json format
//print_r(json_encode($user_arr));
?>