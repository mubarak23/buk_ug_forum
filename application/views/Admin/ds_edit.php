<div class="container">
			<div class="row">
				<div class="col-md-8">
					<div class="main-col">
						<div class="block">
							<h1 class="pull-left">Create A Discussion</h1>
							<h4 class="pull-right">A Platform To Voice Your Though</h4>
							<div class="clearfix"></div>
							<hr>
                            <?php if($ds_edit):?>
							 <form method="POST" action="<?php echo base_url(); ?>admin/ds_edit/<?php echo $ds_edit->ds_id?>">
								<div class="form-group">
									<label>Though Title</label>
									<input type="text" name="title" class="form-control" value="<?php echo $ds_edit->ds_title;  ?>"/>
								</div>
								<div class="form-group">
								<label>Catergory</label>
									 <select class="form-control" name="category">
									<option value="<?php echo $ds_edit->ds_category; ?>" >
                                    <?php echo $ds_edit->ds_category; ?>
                                    </option>
                                    <option value="Education" >Education</option>
									<option value="Technology">Technology</option>
									<option Value="Nigeria" >Nigeria</option>
									<option Value="Business" >Business</option>
                                    <option Value="Media" >Media</option>
									</select>
								</div>
								<div class="form-group">
									<label>Though Body</label>
									<textarea id="body" rows="10" cols="70" class="form-control" name="body">  							<?php echo $ds_edit->ds_body; ?>
                                    
                                    </textarea>
								</div>
								<button type="submit"  name="ds_edit" class="btn btn-default">Edit</button>
							 </form> 	
                             <?php endif; ?>
						</div>
					</div>
				</div>