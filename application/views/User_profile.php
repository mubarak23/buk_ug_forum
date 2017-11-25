<div class="container">
			<div class="row">
			<div class="col-md-8">
					<div class="main-col">
						<div class="block">
                    
                        <?php if($profile):?>
                            <h1 class="pull-left">BUK UG STUDENT FORUM:<?php echo $profile->full_name; ?> Profile</h1>
                            <?php endif; ?>
     


							<div class="clearfix"></div>
							<hr>
                            <?php foreach($user_details as $details):?>
            			<ul id="topics">
								<li class="topic">
								<div class="row">
									 
									<div class="col-md-10">
									<div class="topic-content pull-left">
                                   <h3><a href="<?php echo base_url()?>/discussion/ds_details/<?php echo $details['ds_id']; ?>" ><?php echo $details['ds_title']; ?></a></h3> 
										<div class="topic-info">
											<a href="<?php echo base_url(); ?>Discussion/ds_category/<?php echo $details['ds_category'];?>"><?php echo $details['ds_category']; ?></a> 
											<span class="badge pull-right">3</span>
										</div>
									</div>
								</div>
                                
								</div>
                                
                            
                   
								</li>
								
							</ul>
                <?php endforeach ?>
                
                 
            			<ul id="topics">
								<li class="topic">
								<div class="row">
									 
									<div class="col-md-11">
									<div class="topic-content pull-left">
                                    <?php if($profile):?>
                                   <h3><?php echo $profile->full_name; ?> Profile Details</h3> 
										<div class="topic-info">
										<label>Full Name</label>: <?php echo $profile->full_name; ?><br/>
                                        <label>User Name</label>: <?php echo $profile->user_name; ?><br/>
                                        <label>Email</label>: <?php echo $profile->email; ?><br/>
                                        <label>About Me</label>: <p><?php echo $profile->about_me; ?></p>	
                                        <?php if(!$this->session->userdata('user_id')): ?>
                                        
                                       
                                        
                                        <a href="<?php echo base_url()?>User/edit_profile/<?php echo $profile->user_id; ?>"><button class="btn btn-primary">Edit User</button></a>
                                        
                                        <?php endif; ?>
                                        
                                        <?php endif; ?>	
                                         </div>
									</div>
								</div>
                                
								</div>
                                
                            
                   
								</li>
								
							</ul>
                
						</div>
					</div>
				</div>
                