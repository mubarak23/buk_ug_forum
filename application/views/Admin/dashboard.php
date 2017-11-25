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
                            <h2>Recent Discussion</h2>
                 <table class="table">
                  <tr>
                    
                      <th>User Name</th>
                    <th>Discussion Title</th>
                    <th>Date Pulished</th>
                     
                    <th>Perm Actions</th>
                 </tr>
                 
                     <?php foreach($discussions as $thread) : ?>
                     <tr>
		
		<td><?php echo $thread['full_name']; ?></td>
		<td><?php echo $thread['ds_title']; ?></td>
		<td><?php echo $thread['ds_created_at']; ?></td>
        
        <td><a href="<?php echo base_url();?>admin/ds_edit/<?php echo $thread['ds_id']; ?>"><button class="btn btn-primary" >Edit</button></a>  
        <a href="<?php echo base_url();?>admin/ds_delete/<?php echo $thread['ds_id']; ?>">
         <button class="btn btn-danger">Delete</button></a></td>
		</tr>
        
        <?php endforeach; ?>
                </table>
                
                            </section>
                            
                                      <section>
                            <h2>Recent Reply</h2>
                           
                 <table class="table">
                  <tr>
                    <th>User name</th>
                      <th>Discussion id</th>
                    <th>Reply id</th>
                    
                      <th>Permission Actions</th>
                 </tr>
                 <?php foreach($replys as $reply ):?>
                     <tr>
		<td><?php echo $reply->full_name; ?></td>
		<td><?php echo $reply->ds_id; ?></td>
		<td><?php echo $reply->re_id; ?></td>
		
        <td><a href="<?php echo base_url(); ?>admin/reply_delete/<?php echo $reply->re_id; ?>"><button class="btn btn-danger">Delete</button></a></td>
		</tr>
        <?php endforeach; ?>
                </table>
         
                
                           </section>

                        
                        <section>
                            <h2>Recent Users</h2>
                 <table class="table">
                  <tr>
                    
                      <th>User ID</th>
                    <th>Username</th>
                    <th>Reg Number</th>
                    <th>User Email</th>
                     
                    <th>Register Date</th>
                    <th>Permisson</th>
                 </tr>
                 
                 <?php foreach($sum_users as $users) : ?>
                     
                     <tr>
        
        <td><?php echo $users['user_id']?></td>
        <td><?php echo $users['user_name']?></td>
        <td><?php echo $users['reg_no']?></td>
        <td><?php echo $users['email']?></td>
        <td><?php echo $users['user_create_at']?></td>
        
        <td><a href="<?php echo base_url(); ?>admin/edit_profile/<?php echo $users['user_id']; ?> "><button class="btn btn-primary" >Edit</button></a>  
        <a href="<?php echo base_url();?>admin/user_delete/<?php echo $users['user_id']; ?>">
         <button class="btn btn-danger">Delete</button></a></td>
        </tr>
        
        <?php endforeach; ?>
                </table>
                
                            </section>
                            
						</div>
					</div>
				</div>

        </div>
        
      </div>
  <!-- /.container -->