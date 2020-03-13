<?php
include_once 'config/db_con.php';

$database = new Database();
$conn = $database->getConnection();

if(isset($_POST['btn_upload']))
{    
     
 $file = rand(1000,100000)."_".$_FILES['file']['name'];
    $file_loc = $_FILES['file']['tmp_name'];
// $file_size = $_FILES['file']['size'];
 $file_type = $_FILES['file']['type'];
 $folder="uploads/";
 $caption=$_POST['caption'];
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
  //$sql="INSERT INTO news_notification (caption,file_name,type) VALUES(?,?,?)";

  //echo $sql; die();
 // $mysqli -> query($sql);

//$stmt= $conn->prepare($sql);
//$stmt->execute([$caption,$final_file, $file_type]);



  //mysqli_query($sql);
//die();


try {
   
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $sql = "INSERT INTO news_notification (caption,file_name,type)
    VALUES ('$caption', '$final_file', '$file_type')";
    // use exec() because no results are returned
    //echo $sql; die();
    $conn->exec($sql);
   // echo "New record created successfully";
    }
catch(PDOException $e)
    {
    echo $sql . "<br>" . $e->getMessage();
    }
  ?>
  <script>
  //alert('successfully uploaded');
        window.location.href='admin-news.php?success';
        </script>
  <?php
 }
 else
 {
  ?>
  <script>
  //alert('error while uploading file');
        window.location.href='admin-news?fail';
        </script>
  <?php
 }
}
?>

