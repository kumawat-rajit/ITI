<?php
include_once '../config/db_con.php';
// get database connection
$database = new Database();
$conn = $database->getConnection();

if(count($_POST)>0){
	if($_POST['type']==2){
$id=$_POST['id'];
$name=$_POST['caption'];

//echo $id;
		//die();
		$sql = "UPDATE iti_papers SET caption=? WHERE id=?";

$stmt= $conn->prepare($sql);
$stmt->execute([$name, $id]);


		if ($stmt->rowCount()>0) {
			echo json_encode(array("statusCode"=>200));
		} 
		else {
			echo "Error: " . $sql . "<br>" . $stmt->errorCode();
		}
		
	}
}


if(count($_POST)>0){
	if($_POST['type']==3){
$id=$_POST['id'];

$sql = "DELETE from iti_papers WHERE id=?";
$stmt= $conn->prepare($sql);
$stmt->execute([$id]);


		if ($stmt->rowCount()>0) {
			echo json_encode(array("statusCode"=>200));
		} 
		else {
			echo "Error: " . $sql . "<br>" . $stmt->errorCode();
		}
		
	}
}
?>