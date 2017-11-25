  <div class="container">
			<div class="row">
			<div class="col-md-8">
					<div class="main-col">
                                      <div class="panel panel-default">
                       <div class="panel-heading"><h2>Please Login</h2>  
                        <?php if(!$this->session->flashdata('Success')): ?>
                        <?php echo '<div class="alert alert-success">' .$this->session->flashdata('Failed'). '</div>'?>
                        <?php endif; ?>
                        </div>
                          <div class="panel-body">                            
                            
                            <form role="form" href="<?php echo base_url(); ?>User/login" method="post" class="form-signin">
        
        <label for="inputEmail" class="sr-only">Registration Number</label>
        <input type="text" name="reg_no" class="form-control" placeholder="Enter Your Registration Number" >
        <label for="inputPassword" class="sr-only">Password</label>
        <input type="password" name="password" class="form-control" >
        <br/>
        
        <button class="btn btn-lg btn-primary btn-block" name="login" type="submit">Login</button>
      </form>
                          </div>
                      </div>
                    </div>
				</div>