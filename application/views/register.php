 <div class="container">
			<div class="row">
				<div class="col-md-8">
					<div class="main-col">
						<div class="block">
							<h1 class="pull-left">Create An Account</h1>
							<h4 class="pull-right">A Platform To Voice Your Though</h4>
							<div class="clearfix"></div>
							<hr>
								<form role="form"  method="POST" action="<?php echo base_url();?>User/register">
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
										<label>Registration Number*</label><input type="text" name="reg_no" class="form-control" placeholder="Enter Your Registration Number"/>
									</div>
                                    
									<div class="form-group">
										<label>Password*</label><input type="password" name="password" class="form-control" placeholder="Enter a password"/>
									</div>
									<div class="form-group">
										<label>Confirm Password*</label><input type="password" name="password2" class="form-control" placeholder="Confirm Password"/>
									</div>
									
									<div class="form-group">
									<label>About Me</label>
									<textarea id="about" rows="6" cols="70" name="aboutme" class="form-control" placeholder="Tell Us About Yourself"></textarea>
									</div>
									<input type="submit" name="register" class="btn btn-default" value="Register"/>
								</form>
						</div>
					</div>
				</div>