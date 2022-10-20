<div class="row">
	
	<div class="col-lg-5">
		<div class="card">
			<div class="card-header d-flex align-items-center">
				<h3 class="h4">Upload file</h3>
			</div>
			<div class="card-body">
				<?php echo form_open_multipart('upload/do_upload');?>
					<div class="form-group row">
						<label class="col-sm-3 form-control-label">Title</label>
						<div class="col-sm-9">
							<input type="file" name="userfile" size="20" /> 
						</div>
					</div>
				
					<input type="submit" class="btn btn-primary" value="upload" />
				<?php echo form_close(); ?>
				<h3></h3>
				<div class="main"> </div>
			</div>
		</div>
	</div>


</div>

	


<div style="margin-top: 2rem">
	<div class="card-header d-flex align-items-center">
		<h3 class="h4">My pic list</h3>
	</div>

	<?php echo form_open('ajax'); ?>
    	<input class="form-control mr-sm-2" type="search" id="search_text" placeholder="Search" name="search" aria-label="Search">
    	<button class="btn btn-outline-success my-2 my-sm-0" type="button" data-toggle="collapse" data-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample"> </button>
    <?php echo form_close(); ?>
	
	
	<div class="container">
		<div class="collapse" id="collapseExample">
    	<div class="card card-body" id="result">
			
    	</div>
	</div>
</div>

<style>
button.btn.collapsed:before 
{ 
    content:'Show Result' ; 
}
 button.btn:before
{
    content:'Hide Result' ;
}
</style>

