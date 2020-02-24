<?php 
session_start();


 include_once 'config/db_con.php';

// get database connection
$database = new Database();
$conn = $database->getConnection();
 
 ?>



 <!DOCTYPE html>
<html>
<head>
  <title>Best ITI College in Bassi</title>
   <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
  <link rel="stylesheet" type="text/css" href="css/main.css">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
  <script src="js/main.js"></script>
   <script src="js/ajax.js"></script>

  

   
</head>
<body>
 <div style="margin-bottom: 35px;"></div>
<main>
<div class="container-fluid">
	<div style="margin-bottom: 20px;">
  <h4 style="display: inline;" class="heading">Managing Society</h4>
  <button type="button" style="float:right; display: inline;" class="btn btn-primary" data-toggle="modal" data-target="#com_add">Add New</button>
  </div>
  <div class="clearfix"></div>
  <div class="row">
</div>

<?php  	
 $sql = "SELECT * FROM society";
 $stmt = $conn->query($sql);
 //$stmt->execute();
$stmt->setFetchMode(PDO::FETCH_ASSOC);
$i=1; 
                    if($stmt->rowCount() > 0){
                    	// $data = $stmt->fetch_AL(PDO::FETCH_ASSOC);
                        echo "<table class='table table-bordered table-striped'>";
                                echo "<thead>";
                                    echo "<tr>";
                                        echo "<th>Sr. No.</th>";
                                        echo "<th>Name</th>";
                                        echo "<th>Designation</th>";
                                        echo "<th>Fathaer Name</th>";
                                        
                                        echo "<th>Address</th>";
                                        echo "<th>Member of other Soc./Trust/cmp.</th>";
                                        echo "<th>If yes, details</th>";
                                        echo "<th>Action</th>";
                                    echo "</tr>";
                                echo "</thead>";

                                 echo "<tbody>";
                                 while ($row = $stmt->fetch()) {
                                 	                                 
                                    echo "<tr>";
                                        echo "<td>" . $i . "</td>";
                                         echo "<td>" . $row['name'] . "</td>";
                                        echo "<td>".$row['designation'] . "</td>";
                                        echo "<td>" . $row['fname'] . "</td>";
                                        echo "<td>" . $row['address'] . "</td>";
                                         echo "<td>" . $row['mem_other'] . "</td>";
                                          echo "<td>" . $row['detail'] . "</td>";
                                          
                                        echo "<td>";
                                        

                                           ?>
                            <a href="#com_edit" class="edit" data-toggle="modal">
							<i class='fa fa-edit update' style='color:#1f2e2e' data-toggle="tooltip" 
							data-id="<?php echo $row["id"]; ?>"
              
							data-name="<?php echo $row["name"]; ?>"
							data-desig="<?php echo $row["designation"]; ?>"
							data-fname="<?php echo $row["fname"]; ?>"
							data-address="<?php echo $row["address"]; ?>"
							data-mo="<?php echo $row["mem_other"]; ?>"
							data-detail="<?php echo $row["detail"]; ?>"
							
							title="Edit"></i></a>
                          <a href="#com_delete" class="delete" data-id="<?php echo $row["id"]; ?>" data-toggle="modal"><i class='fa fa-times' style='color:red' data-toggle="tooltip" 
						 title="Delete"></i></a>
                                           <?php
                                          
                                        echo "</td>";
                                    echo "</tr>";
                                    $i--;
                                }
                                echo "</tbody>";                            
                            echo "</table>";
                            // Free result set
                            //mysqli_free_result($result);
                        } else{
                            echo "<p class='lead'><em>No records were found.</em></p>";
                        }
                    
 
                    // Close connection
                    //mysqli_close($con);
                    ?>
</div>


</main>


<!-- The Modal  -->
<div class="modal fade" id="com_add" data-keyboard="false" data-backdrop="static">
  <div class="modal-dialog">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title">Add New Member</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>

      <!-- Modal body -->
      <div class="modal-body">
         
       <form id="comadd_form">
       
  <div class="form-group">
    <label for="name">Name:</label>
    <input type="number" class="form-control" placeholder="Name" id="name" name="name" >
  </div>
  <div class="form-group">
    <label for="desig">Designation:</label>
      <input type="text" class="form-control" placeholder="Enter Designation" id="desig" name="desig" >
   
  </div>
 <div class="form-group">
    <label for="fname">Father's Name:</label>
    <input type="text" class="form-control" placeholder="Enter Father's Name" id="fname" name="fname" >
  </div>
   <div class="form-group">
    <label for="address">Address:</label>
   <textarea class="form-control" rows="3" placeholder="Enter Address" id="address" name="address" ></textarea>
  </div>
   <div class="form-group">
    <label for="mo">Member of other Soc./Trust/cmp.</label>
    <input type="text" class="form-control" placeholder="Enter Detail" id="mo" name="mo" >
  </div>
   <div class="form-group">
    <label for="detail">If yes, details</label>
    <input type="text" class="form-control" placeholder="Enter Detail" id="detail" name="detail" >
  </div>
  
  <input type="hidden" value="1" name="type">
 
</form> 
      </div>

      <!-- Modal footer -->
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Cancel</button> 
        <button type="button" class="btn btn-primary" id="btncom_add">Add</button>
      </div>

    </div>
  </div>
</div>

<!-- Edit -->

<div class="modal fade" id="com_edit" data-keyboard="false" data-backdrop="static">
  <div class="modal-dialog">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title">Edit Member Details</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>

      <!-- Modal body -->
      <div class="modal-body">
       <form id="comedit_form">
        
  <div class="form-group">
    <label for="name">Name:</label>
    <input type="number" class="form-control" placeholder="Name" id="name" name="name_u" >
  </div>
  <div class="form-group">
    <label for="desig">Designation:</label>
      <input type="text" class="form-control" placeholder="Enter Designation" id="desig_u" name="desig" >
  
  </div>
 <div class="form-group">
    <label for="fname">Father's Name:</label>
    <input type="text" class="form-control" placeholder="Enter Father's Name" id="fname_u" name="fname" >
  </div>
   <div class="form-group">
    <label for="address">Address:</label>
   <textarea class="form-control" rows="3" placeholder="Enter Address" id="address_u" name="address" ></textarea>
  </div>
   <div class="form-group">
    <label for="mo">Member of other Soc./Trust/cmp.</label>
    <input type="text" class="form-control" placeholder="Enter Detail" id="mo_u" name="mo" >
  </div>
   <div class="form-group">
    <label for="detail">If yes, details</label>
    <input type="text" class="form-control" placeholder="Enter Detail" id="detail_u" name="detail" >
  </div>
  <input type="hidden" value="2" name="type">
 </form> 
      </div>

      <!-- Modal footer -->
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Cancel</button>
         <button type="button" class="btn btn-primary" id="btncom_update">Update</button>
         </div>


     </div> 

    </div>
 
</div>

<!--Delete Modal HTML -->
	<div id="com_delete" class="modal fade">
		<div class="modal-dialog">
			<div class="modal-content">
				<form>
						
					<div class="modal-header">						
						<h4 class="modal-title">Delete Member</h4>
						<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
					</div>
					<div class="modal-body">
						<input type="hidden" id="id_d" name="id" class="form-control">					
						<p>Are you sure you want to delete these Records?</p>
						<p class="text-warning"><small>This action cannot be undone.</small></p>
					</div>
					<div class="modal-footer">
						<input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">
						<button type="button" class="btn btn-danger" id="btncom_del">Delete</button>
					</div>
				</form>
			</div>
		</div>
	</div>


<script src="http://code.jquery.com/jquery-1.11.1.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
<script src="js/ajax.js"></script>

</body>
</html>