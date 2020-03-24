// GK Add new questions------

// add computer question

$(document).on('click','#btncom_add',function() {
		var data = $("#comadd_form").serialize();
		//console.log(data);
		$.ajax({
			data: data,
			type: "post",
			url: "backend/society.php",
			success: function(dataResult){
				console.log(dataResult);
					var dataResult = JSON.parse(dataResult);
					if(dataResult.statusCode==200){
						$('#com_add').modal('hide');
						//alert('Data added successfully !'); 
                        location.reload();						
					}
					else if(dataResult.statusCode==201){
					   alert(dataResult);
					}
			}
		});
	});


// update computer question

	$(document).on('click','.update',function() {
		//alert('hi');
		var id=$(this).attr("data-id");
		var name=$(this).attr("data-name");
		
		var desig=$(this).attr("data-desig");
		var fname=$(this).attr("data-fname");
		var mo=$(this).attr("data-mo");
		var detail=$(this).attr("data-detail");
		var address=$(this).attr("data-address");
		
		$('#id_u').val(id);
		$('#name_u').val(name);
		$('#desig_u').val(desig);
		$('#fname_u').val(fname);
		$('#mo_u').val(mo);
		$('#detail_u').val(detail);
		$('#address_u').val(address);
		
	});
	
	$(document).on('click','#btncom_update',function() {
		var data = $("#comedit_form").serialize();
		$.ajax({
			data: data,
			type: "post",
			url: "backend/society.php",
			success: function(dataResult){
				console.log(dataResult);
					var dataResult = JSON.parse(dataResult);
					if(dataResult.statusCode==200){
						$('#com_edit').modal('hide');
						alert('Data updated successfully !'); 
                        location.reload();						
					}
					else if(dataResult.statusCode==201){
					   //alert(dataResult);
					}
			}
		});
	});



//delete computer question	

$(document).on("click", ".delete", function() { 
			var id=$(this).attr("data-id");
		$('#id_d').val(id);
		
	});


	$(document).on("click", "#btncom_del", function() { 
		
		$.ajax({
			url: "backend/society.php",
			type: "POST",
			cache: false,
			data:{
				type:3,
				id: $("#id_d").val()
			},
			success: function(dataResult){
				console.log(dataResult);
					$('#com_delete').modal('hide');
					//$("#"+dataResult).remove();
			      location.reload();
			}
		});
	});


// update upload question

	$(document).on('click','.update',function() {
		//alert('hi');
		var id=$(this).attr("data-id");
		var name=$(this).attr("data-caption");
		
		
		$('#id_u').val(id);
		$('#caption_u').val(name);
		
		
	});
	
	$(document).on('click','#upload_update',function() {
		var data = $("#uploadedit_form").serialize();
		$.ajax({
			data: data,
			type: "post",
			url: "backend/upload.php",
			success: function(dataResult){
				console.log(dataResult);
					var dataResult = JSON.parse(dataResult);
					if(dataResult.statusCode==200){
						$('#upload_edit').modal('hide');
						alert('Data updated successfully !'); 
                        location.reload();						
					}
					else if(dataResult.statusCode==201){
					   //alert(dataResult);
					}
			}
		});
	});



//delete computer question	

$(document).on("click", ".delete", function() { 
			var id=$(this).attr("data-id");
		$('#id_d').val(id);
		
	});


	$(document).on("click", "#upload_del", function() { 
		
		$.ajax({
			url: "backend/upload.php",
			type: "POST",
			cache: false,
			data:{
				type:3,
				id: $("#id_d").val()
			},
			success: function(dataResult){
				//console.log(dataResult);
					$('#upload_delete').modal('hide');
					//$("#"+dataResult).remove();
			      location.reload();
			}
		});
	});

	
// update upload technical staff

	$(document).on('click','.updates',function() {
		//alert('hi');
		var id=$(this).attr("data-id");
		var desig=$(this).attr("data-desig");
		var trade=$(this).attr("data-trade");
		var name=$(this).attr("data-name");
		var doj=$(this).attr("data-doj");
		var quali=$(this).attr("data-quali");
		var stream=$(this).attr("data-stream");
		var emp_type=$(this).attr("data-emp_type");
		var cti=$(this).attr("data-cti");
		//alert(trade);
//console(desig);
		$('#id_u').val(id);
		$('#desig_u').val(desig);
		$('#trade_u').val(trade);
		$('#name_u').val(name);
		$('#doj_u').val(doj);
		$('#qualification_u').val(quali);
		$('#stream_u').val(stream);
		$('#emp_type_u').val(emp_type);
		$('#cti_u').val(cti);
		
		
	});
	
	$(document).on('click','#btnstaff_update',function() {
		var data = $("#staffedit_form").serialize();
		$.ajax({
			data: data,
			type: "post",
			url: "backend/technical.php",
			success: function(dataResult){
				console.log(dataResult);
					var dataResult = JSON.parse(dataResult);
					if(dataResult.statusCode==200){
						$('#staff_edit').modal('hide');
						alert('Data updated successfully !'); 
                        location.reload();						
					}
					else if(dataResult.statusCode==201){
					   //alert(dataResult);
					}
			}
		});
	});



//delete computer question	

$(document).on("click", ".delete", function() { 
			var id=$(this).attr("data-id");
		$('#id_d').val(id);
		
	});


	$(document).on("click", "#btnstaff_del", function() { 
		
		$.ajax({
			url: "backend/technical.php",
			type: "POST",
			cache: false,
			data:{
				type:3,
				id: $("#id_d").val()
			},
			success: function(dataResult){
				//console.log(dataResult);
					$('#staff_delete').modal('hide');
					//$("#"+dataResult).remove();
			      location.reload();
			}
		});
	});


//paper edit

$(document).on('click','.update',function() {
		//alert('hi');
		var id=$(this).attr("data-id");
		var name=$(this).attr("data-caption");
		
		
		$('#id_u').val(id);
		$('#caption_u').val(name);
		
		
	});
	
	$(document).on('click','#paper_update',function() {
		var data = $("#uploadedit_form").serialize();
		//alert('sdf');
		console.log(data);
		$.ajax({
			data: data,
			type: "post",
			url: "backend/paper.php",
			success: function(dataResult){
				console.log(dataResult);
					var dataResult = JSON.parse(dataResult);
					if(dataResult.statusCode==200){
						$('#paper_edit').modal('hide');
						alert('Data updated successfully !'); 
                        location.reload();						
					}
					else if(dataResult.statusCode==201){
					   //alert(dataResult);
					}
			}
		});
	});



//delete computer question	

$(document).on("click", ".delete", function() { 
			var id=$(this).attr("data-id");
		$('#id_d').val(id);
		
	});


	$(document).on("click", "#paper_del", function() { 
		
		$.ajax({
			url: "backend/paper.php",
			type: "POST",
			cache: false,
			data:{
				type:3,
				id: $("#id_d").val()
			},
			success: function(dataResult){
				//console.log(dataResult);
					$('#paper_delete').modal('hide');
					//$("#"+dataResult).remove();
			      location.reload();
			}
		});
	});
