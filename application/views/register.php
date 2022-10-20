<?php echo form_open_multipart('register/do_register');?>
<div class="container">
	<div class="col-4 offset-4">
		<form id="submit-form" method="post" accept-charset="utf-8">
			<h2 class="text-center">Register</h2>
			<div class="form-group">
				<input id="username" type="username" class="form-control" placeholder="Username" required="required" name="username">
			</div>
			<div class="form-group">
				<input id="password" type="password" class="form-control" placeholder="Password(less then 15)" required="required" name="password">
			</div>
			<div class="form-group">
				<input id="repeat-password" type="password" class="form-control" placeholder="Password(Repeat)" required="required" name="repeatpwd">
			</div>
			<div class="form-group">
				<input id="email" type="email" class="form-control" placeholder="Email" required="required" name="email">
			</div>
			<div class="form-group">
				<input id="phoneNumber" type="phoneNumber" class="form-control" placeholder="Phone Number" required="required" name="phoneNumber">
			</div>
			<div class="form-group">
				<input id="secret question" type="question" class="form-control" placeholder="What's you mom name?" required="required" name="question">
			</div>
			<div class="form-group">
				<?php
					if (isset($_POST["submitregister"])) {
						echo $error;
					} else {
						echo null;
					}
				?>
			</div>
			<div class="form-group">
				<button type="submit" name="submitregister" class="btn btn-primary btn-block">Register</button>
			</div>
		</form>
	</div>
</div>

<?php echo form_close(); ?>
