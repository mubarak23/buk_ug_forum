 <div class="container">
			<div class="row">
				<div class="col-md-8">
					<div class="main-col">
						<div class="block">
							<h1 class="pull-left">Edit Profile</h1>
							<h4 class="pull-right">A Platform To Voice Your Though</h4>
							<div class="clearfix"></div>
							<hr>
                            <?php if($edit_profile): ?>
								<form role="form" enctype="multipart/form-data" method="POST" action="<?php echo base_url(); ?>user/edit_profile/<?php echo $edit_profile->user_id; ?>">
									<div class="form-group">
										<label>Name*</label><input type="text" name="full_name" class="form-control" value ="<?php echo $edit_profile->full_name; ?>" />
									</div>
									<div class="form-group">
										<label>Email Address*</label><input type="text" name="email" class="form-control" value = "<?php echo $edit_profile->email; ?>"/>
									</div>
									<div class="form-group">
										<label>Choose Username*</label><input type="text" name="username" class="form-control" value="<?php echo $edit_profile->user_name; ?>"/>
									</div>
									
									
									<div class="form-group">
									<label>About Me</label>
									<textarea id="about" rows="6" cols="70" name="aboutme" class="form-control" placeholder="Tell Us About Yourself"><?php echo $edit_profile->about_me; ?></textarea>
									</div>
									<input type="submit" name="edit" class="btn btn-default" value="Edit Profile"/>
								</form>
                               <?php endif; ?> 
						</div>
					</div>
				</div>