		<div class="col-md-8">
					<div class="main-col">
						<div class="block">
							<h1 class="pull-left">Create An User</h1>
							<h4 class="pull-right">Full Access Here</h4>
							<div class="clearfix"></div>
							<hr>
                          <form role="form" enctype="multipart/form-data" method="POST" action="<?php echo base_url(); ?>admin/ad_create_user">
									<div class="form-group">
										<label>Name*</label><input type="text" name="name" class="form-control" placeholder="Enter Your Name"/>
									</div>
									<div class="form-group">
										<label>Email Address*</label><input type="text" name="email" class="form-control" placeholder="Enter Your Email"/>
									</div>
									<div class="form-group">
										<label>Choose Username*</label><input type="text" name="username" class="form-control" placeholder="Choose A Username"/>
									</div>
									<div class="form-group">
										<label>Password*</label><input type="password" name="password" class="form-control" placeholder="Enter a password"/>
									</div>
									<div class="form-group">
										<label>Confirm Password*</label><input type="password" name="password2" class="form-control" placeholder="Confirm Password"/>
									</div>
									<div class="form-group">
										<label>Upload Avatar*</label><input type="file" name="avatar"/>
										<p class="help-block"></p>
									</div>
									<div class="form-group">
									<label>About Me</label>
									<textarea id="about" rows="6" cols="70" name="aboutme" class="form-control" placeholder="Tell Us About Yourself"></textarea>
									</div>
									<input type="submit" name="register" class="btn btn-primary" value="Register"/>
								</form>
                            
                           
						</div>
					</div>
				</div>

        </div>
        
      </div>
  <!-- /.container -->