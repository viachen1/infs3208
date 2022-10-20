<div class="container">
	<div class="col-4 offset-4">
		<form id="submit-form" method="post" accept-charset="utf-8">
			<h2 class="text-center">Reset your password</h2>
			<div class="form-group">
				<input id="username" type="username" class="form-control" placeholder="username" required="required" name="username">
			</div>
			<div class="form-group">
				<input id="password" type="password" class="form-control" placeholder="Password" required="required" name="password">
			</div>
			<div class="form-group">
				<input id="repeat-password" type="password" class="form-control" placeholder="Password(Repeat)" required="required" name="repeatpwd">
			</div>
			<div class="form-group">
				<input id="reset-question" type="question" class="form-control" placeholder="What's your mom's name" required="required" name="question">
			</div>

			<div class="form-group">
				<?php
					if (isset($_POST["repeatpwd"])) {
						echo $error;
					} else {
						echo null;
					}
				?>
			</div>
			<?php echo form_open_multipart('resetpwd/do_reset');?>

				<div class="form-group">
					<button type="submit" name="submitregister" class="btn btn-primary btn-block">Reset</button>
				</div>
			<?php echo form_close(); ?>
		</form>
	</div>
</div>

