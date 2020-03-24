<?php 

include_once('admin-header.php');

 include_once 'config/db_con.php';

// get database connection
$database = new Database();
$conn = $database->getConnection();
 
 ?>
 <div style="margin-bottom: 35px;"></div>
<main style="min-height: 350px;">
<div class="container-fluid">
  <div style="margin-bottom: 20px;">
  <h4 style="display: inline;" class="heading">Technical Staff</h4>
  <button type="button" style="float:right; display: inline;" class="btn btn-primary" data-toggle="modal" data-target="#staff_add">Add New</button>
  </div>
  <div class="clearfix"></div>
  <div class="row">
</div>

<?php   
 $sql = "SELECT * FROM technical_staff";
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
                                        
                                        echo "<th>Designation</th>";
                                        echo "<th>Trade</th>";
                                        echo "<th>Name</th>";
                                        echo "<th>Date of Joining</th>";
                                        echo "<th>Qualification</th>";
                                        echo "<th>Stream</th>";
                                        echo "<th>Reg/Adhoc</th>";
                                        echo "<th>CTI</th>";
                                        echo "<th>Photo Name</th>";
                                        echo "<th>Action</th>";
                                    echo "</tr>";
                                echo "</thead>";
//echo date_format($date,"Y/m/d");
                                 echo "<tbody>";
                                 while ($row = $stmt->fetch()) {
                                      $date = date_create($row['doj']);                       
                                    echo "<tr>";
                                        echo "<td>" . $i . "</td>";
                                        echo "<td>".$row['designation'] . "</td>";
                                        echo "<td>" . $row['trade'] . "</td>";
                                        echo "<td>" . $row['name'] . "</td>";
                                        echo "<td>" . date_format($date,'d/m/Y'). "</td>";
                                         echo "<td>" . $row['qualification'] . "</td>";
                                          echo "<td>" . $row['stream'] . "</td>";
                                           echo "<td>" . $row['emp_type'] . "</td>";
                                            echo "<td>" . $row['cti'] . "</td>";
                                            echo "<td><img src='uploads/".$row['photo_link']."' height='80' width='50'></td>";
                                          
                                        echo "<td>";
                                        

                                           ?>
                            <a href="#staff_edit" class="edit" data-toggle="modal">
              <i class='fa fa-edit updates' style='color:#1f2e2e' data-toggle="tooltip" 
              data-id="<?php echo $row["id"]; ?>"
              data-desig="<?php echo $row["designation"]; ?>"
              data-trade="<?php echo $row["trade"]; ?>"
              data-name="<?php echo $row["name"]; ?>"
              data-doj="<?php echo $row["doj"]; ?>"
              data-quali="<?php echo $row["qualification"]; ?>"
              data-stream="<?php echo $row["stream"]; ?>"
              data-emp_type="<?php echo $row["emp_type"]; ?>"
              data-cti="<?php echo $row["cti"]; ?>"
              data-photo_link="<?php echo $row["photo_link"]; ?>"
              
              title="Edit"></i></a>
                          <a href="#staff_delete" class="delete" data-id="<?php echo $row["id"]; ?>" data-toggle="modal"><i class='fa fa-times' style='color:red' data-toggle="tooltip" 
             title="Delete"></i></a>
                                           <?php
                                          
                                        echo "</td>";
                                    echo "</tr>";
                                    $i++;
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
<div class="modal fade" id="staff_add" data-keyboard="false" data-backdrop="false">
  <div class="modal-dialog">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title">Add Staff</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>

      <!-- Modal body -->
      <div class="modal-body">
         
       <form   action="admin-tech_upload.php" method="post" enctype="multipart/form-data">
       
  <div class="form-group">
    <label for="desig">Designation:</label>
    <input type="text" class="form-control" placeholder="Enter Designation" id="desig" name="desig" >
  </div>
  <div class="form-group">
    <label for="trade">Trade:</label>
      <input type="text" class="form-control" placeholder="Enter Trade" id="trade" name="trade" >
   
  </div>
 <div class="form-group">
    <label for="name">Name:</label>
    <input type="text" class="form-control" placeholder="Enter Name" id="name" name="name" >
  </div>
   <div class="form-group">
    <label for="doj">Date of Joining:</label>
   <input type="date" lass="form-control" rows="3" placeholder="Enter Address" id="doj" name="doj" >
  </div>
   <div class="form-group">
    <label for="qualification">Qualification:</label>
    <input type="text" class="form-control" placeholder="Enter Qualification" id="qualification" name="qualification" >
  </div>
   <div class="form-group">
    <label for="stream">Stream:</label>
    <input type="text" class="form-control" placeholder="Enter Stream" id="stream" name="stream" >
  </div>
  <div class="form-group">
    <label for="emp_type">Reg/Adhoc:</label>
    <input type="text" class="form-control" placeholder="Enter Reg/Adhoc" id="emp_type" name="emp_type" >
  </div>
  <div class="form-group">
    <label for="stream">CTI:</label>
    <input type="text" class="form-control" placeholder="Enter Yes/No" id="cti" name="cti" >
  </div>
  <div class="form-group">
    <label for="stream">Upload Photo:</label>
    <input type="file" class="form-control" id="file" name="file" >
  </div>
  
 
 <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Cancel</button> 
        <button type="submit" class="btn btn-primary" name="btnstaff_add" id="btnstaff_add">Add</button>
      </div>
</form> 
      </div>

      <!-- Modal footer -->
      

    </div>
  </div>
</div>

<!-- Edit -->

<div class="modal fade" id="staff_edit" data-keyboard="false" data-backdrop="false">
  <div class="modal-dialog">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title">Edit Staff Details</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>

      <!-- Modal body -->
      <div class="modal-body">
       <form id="staffedit_form">
        
  <div class="form-group">
      <input type="hidden" id="id_u" name="id" class="form-control" required>
      <label for="desig">Designation:</label>
    <input type="text" class="form-control" placeholder="Enter Designation" id="desig_u" name="desig" >
  </div>
  <div class="form-group">
    <label for="trade">Trade:</label>
      <input type="text" class="form-control" placeholder="Enter Trade" id="trade_u" name="trade" >
   
  </div>
  <div class="form-group">
    <label for="name">Name:</label>
    <input type="text" class="form-control" placeholder="Enter Name" id="name_u" name="name" >
  </div>
   <div class="form-group">
    <label for="doj">Date of Joining:</label>
   <input type="date" lass="form-control" rows="3" placeholder="Enter Address" id="doj_u" name="doj" >
  </div>
   <div class="form-group">
    <label for="qualification">Qualification:</label>
    <input type="text" class="form-control" placeholder="Enter Qualification" id="qualification_u" name="qualification" >
  </div>
   <div class="form-group">
    <label for="stream">Stream:</label>
    <input type="text" class="form-control" placeholder="Enter Stream" id="stream_u" name="stream" >
  </div>
  <div class="form-group">
    <label for="emp_type">Reg/Adhoc:</label>
    <input type="text" class="form-control" placeholder="Enter Reg/Adhoc" id="emp_type_u" name="emp_type" >
  </div>
  <div class="form-group">
    <label for="stream">CTI:</label>
    <input type="text" class="form-control" placeholder="Enter Yes/No" id="cti_u" name="cti" >
  </div>
  <input type="hidden" value="2" name="type">
 </form> 
      </div>

      <!-- Modal footer -->
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Cancel</button>
         <button type="button" class="btn btn-primary" id="btnstaff_update">Update</button>
         </div>


     </div> 

    </div>
 
</div>

<!--Delete Modal HTML -->
  <div id="staff_delete" class="modal fade" data-backdrop="false">
    <div class="modal-dialog">
      <div class="modal-content">
        <form>
            
          <div class="modal-header">            
            <h4 class="modal-title">Delete</h4>
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
          </div>
          <div class="modal-body">
            <input type="hidden" id="id_d" name="id" class="form-control">          
            <p>Are you sure you want to delete these Records?</p>
            <p class="text-warning"><small>This action cannot be undone.</small></p>
          </div>
          <div class="modal-footer">
            <input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">
            <button type="button" class="btn btn-danger" id="btnstaff_del">Delete</button>
          </div>
        </form>
      </div>
    </div>
  </div>


<?php  include_once('admin-footer.php') ?>