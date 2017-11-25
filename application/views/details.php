 <div class="container">
			<div class="row">
				<div class="col-md-8">
					<div class="main-col">
						<div class="block">
                        <?php if($details):?>
							<h1 class="pull-left"><?php echo $details->ds_title ?></h1>
							<h4 class="pull-right">A Platform to voice your Though</h4>
							<div class="clearfix"></div>
							<hr>
                            
							<ul id="topics">
								<li id="mail-topic" class="topic topic">
									<div class="row">
										<div class="col-md-2">
											<div class="user-info">
                                        <!--<img class="avatar pull-left" src="img/gavatar"/>-->
					
										<ul>
											<li><strong><?php echo $details->user_name; ?></strong></li>
											<a href="<?php echo base_url(); ?>user/profile/<?php echo $details->user_id; ?>" >
												
											<li>View</li>
											<li>Profile</li>

											</a>
										</ul>
										</div>

									</div>
										<div class="col-md-10">
											<div class="topic-content pull-right">
                                                  <p><?php echo $details->ds_body; ?></p>
                                                  <p><a href="#"><?php echo $details->user_name; ?></a></p>
                                                  
                                                  <?php foreach($replys as $reply):?>
                                                         	<ul id="topics">
								<li id="mail-topic" class="topic topic">
                                	<h3>Replys</h3>
									<div class="row">
											<div class="col-md-2">
											<div class="user-info">
                                        <!--<img class="avatar pull-left" src="img/gavatar"/>-->
					
										<ul>
											<li><strong><?php echo $details->user_name; ?></strong></li>
											<a href="<?php echo base_url(); ?>user/profile/<?php echo $details->user_id; ?>" >
												
											<li>View</li>
											<li>Profile</li>

											</a>
										</ul>
										</div>

									</div>
										<div class="col-md-10">
											<div class="topic-content pull-right">
												<p>
                                                <?php echo $reply->re_body; ?>
                                                </p>
											</div>
										</div>
									
									</div>
								</li>
							</ul>
                            <?php endforeach; ?>
                                                  
                                                  
											</div>
										</div>
									
									</div>
								</li>
							</ul>
                            <?php endif;?>
                            <?php if($this->session->userdata('logged_in')):?>
							
							<h3>Reply Though</h3>
							 <div class="form-group">
								<form method="post" action="<?php echo base_url(); ?>Discussion/reply" >
											<div class="form-group">
									
									<textarea id="body" rows="10" cols="70" class="form-control" name="comment"></textarea>
								</div>
                                <input type="hidden" name="ds_id" value="<?php echo $details->ds_id; ?>" />
                                <input type="hidden" name="user_id" value="<?php echo $details->user_id; ?>" />
								<input type="submit" name="reply" class="btn btn-primary" value="Reply">
								</form>
							 </div>
                             <?php endif; ?>
                             
                             
                            <?php if(!$this->session->userdata('logged_in')):?>
							
                             <h2>You must login before you can post reply. </h2>
                             <a class="btn btn-primary" href="<?php echo base_url(); ?>user/login">Login</a><br/>
                             <a class="btn btn-primary" href="<?php echo base_url();?>user/register">Register</a>
                                 <?php endif; ?>
						</div>
					</div>
				</div>