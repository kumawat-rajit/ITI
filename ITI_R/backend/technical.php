<?php
include_once '../config/db_con.php';
// get database connection
$database = new Database();
$conn = $database->getConnection();

if(count($_POST)>0){
	if($_POST['type']==2){
$id=$_POST['id'];
$desig=$_POST['desig'];
 $trade=$_POST['trade'];
 $name=$_POST['name'];
 $doj=$_POST['doj'];
 $qualification=$_POST['qualification'];
 $stream=$_POST['stream'];
 $emp_type=$_POST['emp_type'];
  $cti=$_POST['cti'];

//echo $id;
		//die();
 
		$sql = "UPDATE technical_staff SET designation=?, trade=?,name=?,doj=?,qualification=?,stream=?,emp_type=?,cti=? WHERE id=?";

$stmt= $conn->prepare($sql);
$stmt->execute([$desig,$trade, $name,$doj,$qualification,$stream,$emp_type,$cti,$id]);


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

$sql = "DELETE from technical_staff WHERE id=?";
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