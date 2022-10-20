<div class="col-lg-6">
	<div class="card">
		<div class="card-header d-flex align-items-center">
			<h3 class="h4">personal information</h3>
		</div>
		<div class="card-body">
			<form method="post">
				<div class="form-group row">
					<label class="col-sm-3 form-control-label">UserName</label>
					<div class="col-sm-9">
						<?php 
							$this->load->model('user_model');
							$data = $this->user_model->getUserInfo($this->session->userdata("username"));
							foreach ($data as $row){
								echo "$row->username";
							}
						?>
					</div>
				</div>
				
                <div class="form-group row">
					<label class="col-sm-3 form-control-label">email address</label>
					<div class="col-sm-9">
						<?php 
							$this->load->model('user_model');
							$data = $this->user_model->getUserInfo($this->session->userdata("username"));
							foreach ($data as $row){
								echo "$row->Email";
							}
						?>
					</div>
				</div>
                <div class="form-group row">
					<label class="col-sm-3 form-control-label">phone number</label>
					<div class="col-sm-9">
						<?php 
							$this->load->model('user_model');
							$data = $this->user_model->getUserInfo($this->session->userdata("username"));
							foreach ($data as $row){
								echo "$row->PhoneNumber";
							}
						?>
					</div>
					
				</div>
                
			</form>
		</div>
	</div>
	<div class="card">
		<div class="card-header d-flex align-items-center">
			<h3 class="h4">change you personal information</h3>
		</div>
		<div class="card-body">
			<?php echo form_open_multipart('profile/changeInfo');?>

				<form method="post">
					<div class="form-group row">
						<label class="col-sm-3 form-control-label">UserName</label>
						<div class="col-sm-9">
							<input id="inputHorizontalSuccess" type="username" placeholder="Your username" class="form-control form-control-success" name="username">
						</div>
					</div>
					<div class="form-group row">
						<label class="col-sm-3 form-control-label">Password</label>
						<div class="col-sm-9">
							<input id="inputHorizontalWarning" type="password" placeholder="Pasword" class="form-control form-control-warning" name="password">
						</div>
					</div>
					<div class="form-group row">
						<label class="col-sm-3 form-control-label">Password</label>
						<div class="col-sm-9">
							<input id="inputHorizontalWarning" type="password" placeholder="Change Password" class="form-control form-control-warning" name="repeatpwd">
						</div>
					</div>
					<div class="form-group row">
						<label class="col-sm-3 form-control-label">email address</label>
						<div class="col-sm-9">
							<input id="inputHorizontalSuccess" type="email" placeholder="Enter your new E-mail" class="form-control form-control-success" name="email">
						</div>
					</div>
					<div class="form-group row">
						<label class="col-sm-3 form-control-label">phone number</label>
						<div class="col-sm-9">
							<input id="inputHorizontalSuccess" type="phoneNumber" placeholder="Enter your new phone number" class="form-control form-control-success" name="phoneNumber">
						</div>
					</div>
					
					<div class="form-group row">
						<div class="col-sm-9 offset-sm-3">
							<input type="submit" value="Submit" class="btn btn-primary" name="submitregister">
						</div>
					</div>
				</form>
			<?php echo form_close(); ?>
		</div>
	</div>
</div>





