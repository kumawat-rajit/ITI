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


