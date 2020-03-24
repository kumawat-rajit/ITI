<?php
include_once 'config/db_con.php';

$database = new Database();
$conn = $database->getConnection();

if(isset($_POST['btnstaff_add']))
{    
     
 $file = rand(1000,100000)."_".$_FILES['file']['name'];
    $file_loc = $_FILES['file']['tmp_name'];
// $file_size = $_FILES['file']['size'];
 $file_type = $_FILES['file']['type'];
 $folder="uploads/";
 $desig=$_POST['desig'];
 $trade=$_POST['trade'];
 $name=$_POST['name'];
 $doj=$_POST['doj'];
 $qualification=$_POST['qualification'];
 $stream=$_POST['stream'];
 $emp_type=$_POST['emp_type'];
  $cti=$_POST['cti'];
 // new file size in KB
 //$new_size = $file_size/1024;  
 // new file size in KB
 
 // make file name in lower case
 $new_file_name = strtolower($file);
 // make file name in lower case
 
 $final_file=str_replace(' ','_',$new_file_name);
 //echo $file_loc; die();
 if(move_uploaded_file($file_loc,$folder.$final_file))
 {
 

try {
   
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $sql = "INSERT INTO technical_staff (designation,trade,name,doj,qualification,stream,emp_type,cti,photo_link)
    VALUES ('$desig', '$trade','$name','$doj','$qualification','$stream','$emp_type','$cti','$final_file')";
    // use exec() because no results are returned
    //echo $sql; die();
    $conn->exec($sql);
   // echo "New record created successfully";
    }
catch(PDOException $e)
    {
    echo $sql . "<br>" . $e->getMessage();
    }

     header("Location: admin-technical.php?success");
}
 
 else
 {
  header("Location: admin-technical.php?success");
 }
}
?>

