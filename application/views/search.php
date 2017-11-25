
<div class="container">
			<div class="row">
           
            
			<div class="col-md-8">
					<div class="main-col">
						<div class="block">
                            <h1 class="pull-left">Welcome to BUK UG STUDENT FORUM: <?php echo $this->session->userdata('user_name'); ?></h1>
     
                            	<?php if($this->session->flashdata('Success')): ?>
								<?php echo '<div class="alert alert-success">' .$this->session->flashdata('Success'). '</div>'?>
								<?php endif; ?>


							<div class="clearfix"></div>
							<hr>

							<ul id="topics">
							<li class="topic">
                          	<div class="col-md-12">
                          		<form method="post" class="form-group" action="<?php echo base_url(); ?>Discussion/search">
                          			<div class="col-md-4">
														 <select class="form-control" name="category">
														<option value="" >Select Category</option>
					                                    <option value="Education" >Education</option>
														<option value="Technology">Technology</option>
														<option Value="Nigeria" >Nigeria</option>
														<option Value="Business" >Business</option>
					                                    <option Value="Media" >Media</option>
														</select>
                          			</div>
                          			<div class="col-md-6">
                          				<input type="text" name="search" placeholder="Enter Your Search Term" class="form-control">
                          			</div>

                          			<div class="col-md-2">
                          				<button type="submit"  name="ds_create" class="btn btn-default">Search</button>
                          			</div>

                          		</form>
                          	</div>
                          </li>
                      </ul>
                            
                           
                            

                              
                          
							
						</div>
					</div>
				</div>
                
                