<?php echo form_open_multipart('map/show_address');?>
<div class="row justify-content-center">
    <div class="col-md-4 col-md-offset-6 centered">
        
		<div class="form-group">
            <input type="text" class="form-control" name="address" placeholder="Enter address">        
        </div>
		<div class="form-group">
            <input type="submit" class="btn btn-primary btn-block" name="sumbit_address">        
        </div>

    </div>
</div>
<?php echo form_close(); ?>





