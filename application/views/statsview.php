<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>

Status for design for web
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

	<div style="with:50%;display:inline;float:right;">
		<form >
		  <input type='text' name='year' value=''>
		  <input type='submit' value = 'go'>
		  
		</form>
		 <div class="results">
			<?php if(!empty($results)):?>
					 <?php foreach ($results as $row3):?>  

					<ul>
					  <li><?php echo $row3->week;?></li>
				  </ul>
		   <?php endforeach;?>                    
				<?php else : ?>  	
		  <h4> no results</h4>
		 <?php endif ; ?>  
		
		 </div>
		 <div class="pagination blog-pager">

               <?php echo $links; ?>

          </div>
	</div>
</div>	
</html>