<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>

<link rel="stylesheet" href="<?php echo base_url();?>css/bootstrap-theme.min.css" >
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
<!-- Latest compiled and minified JavaScript -->
<script src="<?php echo base_url();?>js/bootstrap.min.js"></script>
<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>css/bootstrap.min.css">
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
	<table class="table solsoTable " data-all="34">
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
	<tbody>
	<?php if(!empty($results)):?>
		 <?php foreach ($results as $row3):?>  
		<tr>
			<td><?php echo $row3->week;?>			</td>
			<td><?php echo $row3->sale;?>		</td>
			<td><?php echo $row3->invoice;?>			</td>					
			<td><?php echo $row3->ringet;?>			</td>						
			<td><?php echo $row3->new_customer;?>	</td>				
			<td>+353 1862 1555			</td>						
			<td><button type="button" class="btn btn-info solsoShowModal" data-toggle="modal" data-target="#solsoCrudModal" data-href="client/42" data-modal-title="Show Client"> Show
				</button></td>
			<td>			
				<button type="button" class="btn btn-primary solsoShowModal" data-toggle="modal" data-target="#solsoCrudModal" data-href="client/42/edit" data-modal-title="Edit Client">
					 Edit
				</button>
			</td>
			<td>					
				<button type="button" class="btn btn-danger solsoConfirm" data-toggle="modal" data-target="#solsoDeleteModal" data-href="client/42">
					 Delete
				</button>		
			</td>
		</tr>
		<?php endforeach;?>                    
					<?php else : ?>  
			
		<tr>
			<td></td>
			<td></td>
			<td></td>					
			<td></td>
			<td></td>					
			<td></td>						
			<td>		
				<button type="button" class="btn btn-info solsoShowModal" data-toggle="modal" data-target="#solsoCrudModal" data-href="client/42" data-modal-title="Show Client">
					 Show
				</button>
			</td>
			<td>			
				<button type="button" class="btn btn-primary solsoShowModal" data-toggle="modal" data-target="#solsoCrudModal" data-href="client/42/edit" data-modal-title="Edit Client">
					 Edit
				</button>
			</td>
			
			<td>		
							
				<button type="button" class="btn btn-danger solsoConfirm" data-toggle="modal" data-target="#solsoDeleteModal" data-href="client/42">
					 Delete
				</button>		
			</td>
			<?php endif ; ?>  		
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

				   <?php echo $links;?>
	</div>

		</div>
	</div>	
</div>	
<script type="text/javascript">
for (i = new Date().getFullYear(); i > 1900; i--)
{
    $('#yearpicker').append($('<option />').val(i).html(i));
}</script>
<script>
function selectState(country_id){
  if(country_id!="-1"){
    loadData('state',country_id);
    $("#city_dropdown").html("<option value='-1'>Select city</option>");
  }else{
    $("#state_dropdown").html("<option value='-1'>Select state</option>");
    $("#city_dropdown").html("<option value='-1'>Select city</option>");
  }
}
</script>
<script type="text/javascript">

function loadData(loadType,loadId){
  var dataString = 'loadType='+ loadType +'&loadId='+ loadId;
  $("#"+loadType+"_loader").show();
  $("#"+loadType+"_loader").fadeIn(400).html('Please wait... <img src="image/loading.gif" />');
  $.ajax({
    type: "POST",
    url: "loadData",
    data: dataString,
    cache: false,
    success: function(result){
      $("#"+loadType+"_loader").hide();
      $("#"+loadType+"_dropdown").html("<option value='-1'>Select "+loadType+"</option>");
      $("#"+loadType+"_dropdown").append(result);
    }
 });
}
</script>

</html>