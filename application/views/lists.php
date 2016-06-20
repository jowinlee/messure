<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta charset="utf-8">
 <meta http-equiv="X-UA-Compatible" content="IE=edge">
 <meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="<?php echo base_url();?>css/bootstrap-theme.min.css" >
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
<!-- Latest compiled and minified JavaScript -->
<script src="<?php echo base_url();?>js/bootstrap.min.js"></script>
<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>css/bootstrap.css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>css/font-awesome.min.css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>css/jquery.growl.css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>css/design.css">


</head>

<div class="contraine-fluid" style="width:980px;margin-top:50px;margin:auto;display:block;">
	
	<div class="row">
		<div class="col-sm-3 col-md-2 sidebar">
			
		</div>
		<div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">	
			<h4>Status for design for web</h4>
				<div class="section">
				
					<?php $year['#'] = 'Please Select'; ?>
		 
				<label for="year">year: </label><?php echo form_dropdown('year_id', $year, '#', 'id="year"'); ?><br />
				</div>
				<div class="section">
				 
					
					<table id="ajxResult" class="table table-condensed">
					<thead>
						<tr>
							<th>Week</th>
							<th>Salg</th>
							<th>Fakturaret</th>
							<th>Ringer ex kunder</th>
							<th>Nye kunder</th>
							<th class="col-md-1">Status(Green & Red)</th>
							<th class="small">Action</th>
							<th class="small">Action</th>
							
						</tr>
					</thead>
					<tbody id="data">
					
					</tbody>
					<thead>
						<tr>
							<form name='post_form' action='<?=base_url()?>status/entry' method='post' enctype="multipart/form-data">
							<th>Add Entry</th>
							<th><input type='text' name='sale' value=''></br></th>
							<th><input type='text' name='invoice' value=''></br></th>
							<th><input type='text' name='ringet' value=''></br></th>
							<th><input type='text' name='new_customer' value=''></br></th>
							<th class="col-md-1"></th>
							<th class="small"><input type='submit' name='submit' value='Submit'></th>
							<th class="small"><input type='reset' name='submit' value='Clear'></th>
							
						</tr>
					</thead>
					</table>
					<div class="pagination blog-pager">
								  
					</div>

				 
			</div>	
		</div>
	</div>	
</div>
<script type="text/javascript">
for (i = new Date().getFullYear(); i > 1900; i--)
{
    $('#yearpicker').append($('<option />').val(i).html(i));
}</script>

<script type="text/javascript">
 $(document).ready(function(){
	 $('#year').change(function(){ //
		 $("#weeks > option").remove(); 
		 var year_id = $('#year').val(); //
		
		$.ajax({
			 type: "POST",
			 dataType: 'json',
			 url: "<?php echo base_url();?>status/get_weeks/"+year_id, //
			 success: function(weeks) //
				{
				var trHTML = '';
				 $.each(weeks,function(week_id,week) //here we're doing a foeach loop round each city with id as the key and city as the value
				 {
					 trHTML += '<tr><td>' + weeks[week_id].week + '</td><td>' + weeks[week_id].sale + '</td><td>' + weeks[week_id].invoice + '</td><td>' + weeks[week_id].ringet + '</td><td>' + weeks[week_id].new_customer + '</td><td>' + weeks[week_id].ringet + '</td><td>'+'<a hre>'+"Edit"+'</a>'+ '</td><td>' +'<a hre>'+"Del"+'</a>' + '</td></tr>';
					 //var opt = $('<option />'); // here we're creating a new select option with for each city
					// opt.val(week_id);
					 //opt.text(week);
					//$('#weeks').append(opt); //here we will append these new select options to a dropdown with the id 'cities'            
           
				});        
					$('tbody').empty().append(trHTML);
        
				},
				
				 });
			 });
			 
		 });
	 	 
</script>

</html>