
<div class="container">
			<div class="row">
           
            
			<div class="col-md-8">
					<div class="main-col">
						<div class="block">
                            <h1 class="pull-left">Search Result of BUK UG STUDENT FORUM: <?php echo $this->session->userdata('user_name'); ?></h1>
     
                            	<?php if($this->session->flashdata('Success')): ?>
								<?php echo '<div class="alert alert-success">' .$this->session->flashdata('Success'). '</div>'?>
								<?php endif; ?>


							<div class="clearfix"></div>
							<hr>
                          
                   
                           
                            
							<ul id="topics">
								<li class="topic">
									<?php if($search_result) : ?>


                        <?php foreach($search_result as $result):?> 

								<div class="row">
									<div class="col-md-2">
											<div class="user-info">
                                        <!--<img class="avatar pull-left" src="img/gavatar"/>-->
					
										<ul>
											<li><strong><?php echo $result['user_name']; ?></strong></li>
											<a href="<?php echo base_url(); ?>user/profile/<?php echo $result['user_id']; ?>" >
												
											<li>View</li>
											<li>Profile</li>

											</a>
										</ul>
										</div>

									</div> 
									 
									<div class="col-md-10">
									<div class="topic-content pull-left">
                                      <h3><a href="<?php echo base_url()?>/discussion/ds_details/<?php echo $result['ds_id'];?>" ><?php echo $result['ds_title']; ?></a></h3>
										<div class="topic-info">
											<a href="<?php echo base_url();?>Discussion/ds_category/<?php echo $result['ds_category']; ?>"><?php echo $result['ds_category']; ?></a> >>>>Posted by:  <a href="<?php echo base_url(); ?>user/profile/<?php echo $result['user_id']; ?>"> <?php echo $result['user_name']; ?></a>
											<span class="badge pull-right">3</span>
										</div>
									</div>
								</div>
								</div>

                          <?php endforeach; ?>

							<?php else: ?>

								<p>Unable to fetch any result base on your Keyword </p>
								<p><a href="<?php echo base_url(); ?>discussion/search" class="btn btn-primary">Search Again</a></p>

							<?php endif; ?>

								</li>
								
							</ul>
                              
                          
							
						</div>
					</div>
				</div>
                
                