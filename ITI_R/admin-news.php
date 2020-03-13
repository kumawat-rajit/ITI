<?php 

include_once('admin-header.php');

 include_once 'config/db_con.php';

// get database connection
$database = new Database();
$conn = $database->getConnection();
 



if(isset($_GET['success']))
 {
  ?>
        <label>File Uploaded Successfully... </label>
        <?php
 }
 else if(isset($_GET['fail']))
 {
  ?>
        <label>Problem While File Uploading !</label>
        <?php
 }

 ?>


 <div style="margin-bottom: 35px;"></div>
<main style="min-height: 350px;">
<div class="container-fluid">
	<div style="margin-bottom: 20px;">
  <h4 style="display: inline;" class="heading">Neww & Notification</h4>
  <button type="button" style="float:right; display: inline;" class="btn btn-primary" data-toggle="modal" data-target="#news_add">Add New</button>
  </div>
  <div class="clearfix"></div>
  <div class="row">
</div>

<?php  	
 $sql = "SELECT * FROM news_notification order by id DESC";
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
                                        echo "<th>Caption</th>";
                                        echo "<th>File Name</th>";
                                        echo "<th>File Type</th>";
                                        
                                        echo "<th>File Link</th>";
                                        
                                        echo "<th>Action</th>";
                                    echo "</tr>";
                                echo "</thead>";

                                 echo "<tbody>";
                                 while ($row = $stmt->fetch()) {
                                 	                                 
                                    echo "<tr>";
                                        echo "<td>" . $i . "</td>";
                                         echo "<td>" . $row['caption'] . "</td>";
                                        echo "<td>".$row['file_name'] . "</td>";
                                        echo "<td>" . $row['type'] . "</td>";
                                        echo "<td><a href='uploads/".$row['file_name']."' target='_blank'>View file</a></td>";
                                                                                  
                                        echo "<td>";
                                        

                                           ?>
                            <a href="#upload_edit" class="edit" data-toggle="modal">
							<i class='fa fa-edit update' style='color:#1f2e2e' data-toggle="tooltip" 
							data-id="<?php echo $row["id"]; ?>"
              
							data-caption="<?php echo $row["caption"]; ?>"
							
							
							title="Edit"></i></a>
                          <a href="#upload_delete" class="delete" data-id="<?php echo $row["id"]; ?>" data-toggle="modal"><i class='fa fa-times' style='color:red' data-toggle="tooltip" 
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
<div class="modal fade" id="news_add" data-keyboard="false" data-backdrop="false">
  <div class="modal-dialog">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title">Add New</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>

      <!-- Modal body -->
      <div class="modal-body">
         
       <form id="comadd_form"  action="news-upload.php" method="post" enctype="multipart/form-data">
       
 
   <div class="form-group">
    <label for="caption">Caption:</label>
   <textarea class="form-control" rows="3" placeholder="Enter Caption" id="caption" name="caption" ></textarea>
  </div>
   <div class="form-group">
    <label for="file">Upload File</label>
    <input type="file" class="form-control"  id="file" name="file" >
  </div>
  
 <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Cancel</button> 
        <button type="submit" class="btn btn-primary" name="btn_upload" id="btn_upload">Submit</button>
      </div>
</form> 
      </div>

      <!-- Modal footer -->
      

    </div>
  </div>
</div>



<div class="modal fade" id="upload_edit" data-keyboard="false" data-backdrop="false">
  <div class="modal-dialog">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title">Edit Caption</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>

      <!-- Modal body -->
      <div class="modal-body">
       <form id="uploadedit_form">
      
      <input type="hidden" id="id_u" name="id" class="form-control" required>
   
   <div class="form-group">
    <label for="caption">Caption:</label>
   <textarea class="form-control" rows="3" placeholder="Enter Caption" id="caption_u" name="caption" ></textarea>
  </div>
  
  
  <input type="hidden" value="2" name="type">
 </form> 
      </div>

      <!-- Modal footer -->
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Cancel</button>
         <button type="button" class="btn btn-primary" id="upload_update">Update</button>
         </div>


     </div> 

    </div>
 
</div>



<!--Delete Modal HTML -->
	<div id="upload_delete" class="modal fade" data-backdrop="false">
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
						<button type="button" class="btn btn-danger" id="upload_del">Delete</button>
					</div>
				</form>
			</div>
		</div>
	</div>
 <?php  include_once('admin-footer.php') ?>