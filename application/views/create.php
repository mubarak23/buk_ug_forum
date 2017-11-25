<div class="container">
			<div class="row">
				<div class="col-md-8">
					<div class="main-col">
						<div class="block">
							<h1 class="pull-left">Create A Discussion</h1>
							<h4 class="pull-right">A Platform To Voice Your Though</h4>
							<div class="clearfix"></div>
							<hr>
							 <form method="POST" action="create">
								<div class="form-group">
									<label>Though Title</label>
									<input type="text" name="title" class="form-control" placeholder="Enter Your Though Title"/>
								</div>
								<div class="form-group">
								<label>Catergory</label>
									 <select class="form-control" name="category">
									<option value="" >Select Category</option>
                                    <option value="Education" >Education</option>
									<option value="Technology">Technology</option>
									<option Value="Nigeria" >Nigeria</option>
									<option Value="Business" >Business</option>
                                    <option Value="Media" >Media</option>
									</select>
								</div>
								<div class="form-group">
									<label>Though Body</label>
									<textarea id="body" rows="10" cols="70" class="form-control" name="body"></textarea>
								</div>
								<button type="submit"  name="ds_create" class="btn btn-default">Create</button>
							 </form> 	
						</div>
					</div>
				</div>