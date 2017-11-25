
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
                          
                            
                        <?php foreach($results as $topics):?> 
                           
                            
							<ul id="topics">
								<li class="topic">
								<div class="row">
									<div class="col-md-2">
											<div class="user-info">
                                        <!--<img class="avatar pull-left" src="img/gavatar"/>-->
					
										<ul>
											<li><strong><?php echo $topics['user_name']; ?></strong></li>
											<a href="<?php echo base_url(); ?>user/profile/<?php echo $topics['user_id']; ?>" >
												
											<li>View</li>
											<li>Profile</li>

											</a>
										</ul>
										</div>

									</div> 
									 
									<div class="col-md-10">
									<div class="topic-content pull-left">
                                      <h3><a href="<?php echo base_url()?>/discussion/ds_details/<?php echo $topics['ds_id'];?>" ><?php echo $topics['ds_title']; ?></a></h3>
										<div class="topic-info">
											<a href="<?php echo base_url();?>Discussion/ds_category/<?php echo $topics['ds_category']; ?>"><?php echo $topics['ds_category']; ?></a> >>>>Posted by:  <a href="<?php echo base_url(); ?>user/profile/<?php echo $topics['user_id']; ?>"> <?php echo $topics['user_name']; ?></a>
											<span class="badge pull-right">3</span>
										</div>
									</div>
								</div>
								</div>
								</li>
								
							</ul>
                            
                          <?php endforeach; ?>  
                          
							
						</div>
					</div>
				</div>
                
                