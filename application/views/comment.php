
<div class="card-header d-flex align-items-center">
	<h3 class="h4">Comment List</h3>
</div>
<div class="card-body">
	<div class="panel panel-default" id="comments">
		<div class="panel-body">
			<div id="comment">
				<h3>study note</h3>
				<?php echo form_open_multipart('comment/do_addComment');?>
					<div class="form-group">
						<textarea name="content" class="form-control" placeholder="" id="commentcontent" cols="6" rows="5" tabindex="4"></textarea>
					</div>
					<?php $username = $this->session->userdata('username');?>
					<div class="form-group">
						<button type="submit" id=sendComment class="btn btn-primary btn-block">Done</button>
					</div>
				
				
				<?php echo form_close(); ?>
				

				
				<?php echo form_open_multipart('comment/show_comment');?>
				<button type="submit" name="show" class="btn btn-primary btn-block">show</button>
					<?php
					if (isset($_POST["show"])) {
						?>
						<?php foreach ($commentList as $item):?>
							<dl>
								<dd>
									<div class="parent">
										<cite><?= $item['username']?></cite>
										<p><?= $item['content']?></p>
									</div>
								</dd>
								<div class="clearfix"></div>
							</dl>
						<?php endforeach;?> <?php
					}
					?>


				<?php echo form_close(); ?>
				<button type="submit" class="btn btn-primary btn-block">hide</button>
			</div>
		</div>
	</div>
</div>


