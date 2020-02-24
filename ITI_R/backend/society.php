<?php
include_once '../config/db_con.php';
// get database connection
$database = new Database();
$conn = $database->getConnection();

if(count($_POST)>0){
if($_POST['type']==1){
$name=$_POST['name'];
$desig=$_POST['desig'];
$fname=$_POST['fname'];
$address=$_POST['address'];
$mo=$_POST['mo'];
$detail=$_POST['detail'];


$sql = "INSERT INTO society (name, designation, fname,address,mem_other,detail) 
		VALUES (?,?,?,?,?,?)";
$stmt= $conn->prepare($sql);
$stmt->execute([$name,$desig, $fname, $address,$mo,$detail]);

if ($stmt->rowCount()>0) {
			echo json_encode(array("statusCode"=>200));
		} 
		else {
			echo "Error: " . $sql . "<br>" . $stmt->errorCode();
			//echo json_encode(array("statusCode"=>201));
		}		
}	
}	



if(count($_POST)>0){
	if($_POST['type']==2){
$id=$_POST['id'];
$name=$_POST['name'];
$desig=$_POST['desig'];
$fname=$_POST['fname'];
$address=$_POST['address'];
$mo=$_POST['mo'];
$detail=$_POST['detail'];

		$sql = "UPDATE society SET name=?,desig=?, fname=?, address=?, mem_other=?, detail=? WHERE id=?";
$stmt= $conn->prepare($sql);
$stmt->execute([$name,$desig, $fname, $address,$mo,$detail, $id]);


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

$sql = "DELETE from society WHERE id=?";
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