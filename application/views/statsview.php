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
<h4>Status for design for web</h4>
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
		<div class="row">
		
			<div>
				<div >
				  <select >
						<option value="-1">Select Year</option>
				<?php if(!empty($results)):?>
				
						 <?php foreach ($results as $row3):?>  

						  <option><?php echo $row3->year;?></option>
					  
			   <?php endforeach;?> 
				</select>
					<?php else : ?>  	
			  <h4> no results</h4>
			 <?php endif ; ?>  
			
			 </div>
			</div>
		</div>
		<div class="row">
		 <div class="results">
				<?php if(!empty($results)):?>
						 <?php foreach ($results as $row3):?>  

						<ul>
						  <li>Week &nbsp;<?php echo $row3->week;?>
								<span style="margin-left:10px;"></span><?php echo $row3->sale;?><span style="margin-left:10px;"><?php echo $row3->invoice;?></span>
						  </li>
					  </ul>
			   <?php endforeach;?>                    
					<?php else : ?>  	
			  <h4> no results</h4>
			 <?php endif ; ?>  
			
			 </div>
			 <div class="pagination blog-pager">

				   <?php echo $links;?>
			</div>
		</div>	
		
		<div class="row">
			<table class="table solsoTable " data-all="34">
	<thead>
		<tr>
			<th>Crt.</th>
			<th>Client</th>
			<th>Address</th>
			<th>Contact</th>
			<th>E-mail</th>
			<th class="col-md-1">Phone</th>
			<th class="small">Action</th>
			<th class="small">Action</th>
			<th class="small">Action</th>
		</tr>
	</thead>
	
	<tbody>
	
		
		<tr>
			<td>
				1			</td>

			<td>
				Clover Collections, Co.			</td>
			
			<td>
				25 Maiden Lane			</td>					
			
			<td>
				Cassidy Dean			</td>						
			
			<td>
				dean@demo.demo			</td>					

			<td>
				+353 1862 1555			</td>						
			
			<td>
				<!--
				/** 
				 * === BUTTON FOR MODAL SHOW ===
				 * add solsoShowModal in button class
				 * place data-href, data-modal-title in button code
				 * data-href 			= path to your controller for show action
				 * data-modal-title	= text for modal title
				*/
				-->				
				<button type="button" class="btn btn-info solsoShowModal" data-toggle="modal" data-target="#solsoCrudModal" data-href="client/42" data-modal-title="Show Client">
					<i class="fa fa-eye"></i> Show
				</button>
			</td>
		</tr>	


		</div>
	</div>	
</div>	

</html>