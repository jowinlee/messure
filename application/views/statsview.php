<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>

<!--<link rel="stylesheet" href="<?php echo base_url();?>css/bootstrap-theme.min.css" > -->
<link rel="stylesheet" href="<?php echo base_url();?>css/semantic.min.css" >
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
<!-- Latest compiled and minified JavaScript -->
<script src="<?php echo base_url();?>js/bootstrap.min.js"></script>
<!-- <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>css/bootstrap.min.css"> -->
<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>css/font-awesome.min.css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>css/jquery.growl.css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>css/design.css">


</head>

<div class="contrainer" style="width:980px;margin-top:50px;margin:auto;display:block;">
	<div style="with:50%;display:inline;float:left;">
	<form name='post_form' action='<?=base_url()?>status/entry' method='post' enctype="multipart/form-data">

			Salg<input type='text' name='sale' value=''></br>
			Fakturaret<input type='text' name='invoice' value=''></br>
			Ringer ex kunder<input type='text' name='ringet' value=''></br>
			Nye kunder<input type='text' name='new_customer' value=''></br>
			<input type='submit' name='submit' value='save'>
	</form>
	</div>
	<div style="clear:both;"></div>
	<div class="container">
	<h4>Status for design for web</h4>
		<div class="row">
		
			<select name="yearpicker" id="yearpicker"></select>
		</div>
		<div class="row">
		 
	<div class="row">
	<table id="ajxResult" class="table solsoTable " data-all="34">
	<thead>
		<tr>
			<th>Week</th>
			<th>Salg</th>
			<th>Fakturaret</th>
			<th>Ringer ex kunder</th>
			<th>Nye kunder</th>
			<th class="col-md-1">Phone</th>
			<th class="small">Action</th>
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
			<th class="small">Action</th>
		</tr>
	</thead>
	</table>
	<div class="pagination blog-pager">
				  
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
					 trHTML += '<tr><td>' + weeks[week_id].week + '</td><td>' + weeks[week_id].sale + '</td><td>' + weeks[week_id].invoice + '</td><td>' + weeks[week_id].ringet + '</td><td>' + weeks[week_id].new_customer + '</td></tr>';
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