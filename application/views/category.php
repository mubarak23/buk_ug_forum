<div class="container">
			<div class="row">
			<div class="col-md-8">
					<div class="main-col">
						<div class="block">
                            <h1 class="pull-left">Welcome to BUK UG  STUDENT FORUM</h1>
     


							<div class="clearfix"></div>
							<hr>
                          
                            
                        <?php foreach($category as $details_data):?>    
                            
							<ul id="topics">
								<li class="topic">
								<div class="row">
										<div class="col-md-2">
											<div class="user-info">
                                        <!--<img class="avatar pull-left" src="img/gavatar"/>-->
					
										<ul>
											<li><strong><?php echo $details_data['user_name']; ?></strong></li>
											<a href="<?php echo base_url(); ?>user/profile/<?php echo $details_data['user_id']; ?>" >
												
											<li>View</li>
											<li>Profile</li>

											</a>
										</ul>
										</div>

									</div>
									<div class="col-md-10">
									<div class="topic-content pull-left">
                                      <h3><a href="<?php echo base_url()?>/discussion/ds_details/<?php echo $details_data['ds_id']; ?>" ><?php echo $details_data['ds_title']; ?></a></h3>
										<div class="topic-info">
											<?php echo $details_data['ds_category']; ?> >>>> <a href="<?php echo base_url(); ?>user/profile/<?php echo $details_data['user_id']; ?>"><?php echo $details_data['user_name']; ?></a>  
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