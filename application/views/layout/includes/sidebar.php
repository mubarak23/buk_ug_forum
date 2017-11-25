<div class="col-md-4">
				<div class="sidebar"> 
					<div class="block">
				<?php if($this->session->userdata('logged_in')):?>
                <h3>BUK_UG_FORUM Platform Statistics</h3>
							<ul>
								<li>Total Number of Users:<strong>35</strong></li>
								<li>Total number of Though:<strong> 5</strong></li>
								<li>Total Number of Catergories:<strong>10</strong></li>
							</ul>
                <?php endif;?>   
                <?php if(!$this->session->userdata('logged_in')):?>                 
						<h3>Login Form</h3>
						<form role="form" action="<?php echo base_url(); ?>User/login" method="post">
						<div class="form-group">
							<label for="Registration Number">Registration Number</label>
							<input name="reg_no" type="text" class="form-control" placeholder="Enter  Registration Number"/>
						</div>
						<div class="form-group">
							<label>Password</label>
							<input name="password" type="password" class="form-control" placeholder="Enter Password"/>
						</div>
						<input value="Login" name="login" type="submit" class="btn btn-primary">
						</form>
                        <?php endif; ?>
					</div>
					<div class="block">
					<h3>Catergories</h3>
					<a href="<?php echo base_url(); ?>Discussion/ds_category/Education" class="list-group-item active">Education</a>
					<a href="<?php echo base_url(); ?>Discussion/ds_category/Technology" class="list-group-item ">Technology</a>
					<a href="<?php echo base_url(); ?>Discussion/ds_category/Nigeria" class="list-group-item ">Nigeria</a>
					<a href="<?php echo base_url(); ?>Discussion/ds_category/Business" class="list-group-item ">Business</a>
					
					
					<div>
					
				</div>
				</div>
			</div>	
		

    </div>
</div>                
</div><!-- /.container -->

                