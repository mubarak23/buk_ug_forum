
	<div class="col-md-8">
					<div class="main-col">
						<div class="block">
							<h1 class="pull-left">Welcome Home Admin</h1>
							<h4 class="pull-right">Full Access Here</h4>
							<div class="clearfix"></div>
							<hr>
                            <section>
                            <div class="row">
                            <div class="col-md-4"> <i class="fa fa-user fa-5x fa-border active"></i>
                                <h4>Totla Number of Users</h4><span><?php echo $num_users; ?></span>
                                </div>
                                
                            <div class="col-md-4"> <i class="fa fa-file-text-o fa-5x fa-border"></i>
                                <h4>Total Number Of Active Discussion</h4><span><?php echo $num_dis; ?></span>
                                </div>
                                
                            <div class="col-md-4"> <i class="fa fa-file-word-o fa-5x fa-border"></i>
                                <h4>Total Number of Active Reply</h4><span><?php echo $num_replys; ?></span>
                                </div>
                            </div>
                            </section>
                            
                                   <section>
                            <h2>Edit Reply</h2>
                          	
                          	<?php if($reply_edit) :?>

							 <div class="form-group">
								<form method="post" action="<?php echo base_url(); ?>Admin/reply_edit/<?php echo $reply_edit->re_id; ?>" >
											<div class="form-group">
									
									<textarea id="body" class="form-control" name="reply"><?php echo $reply_edit->re_body; ?></textarea>
								</div>
                                <input type="hidden" name="ds_id" value="<?php echo $reply_edit->ds_id; ?>" />
                                <input type="hidden" name="user_id" value="<?php echo $reply_edit->user_id; ?>" />
								<input type="submit" name="edit" class="btn btn-primary" value="Moderate">
								</form>
							 </div>

							<?php endif; ?>
         
                
                           </section>
                            
                                      
						</div>
					</div>
				</div>

        </div>
        
      </div>
  <!-- /.container -->