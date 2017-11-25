<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../../favicon.ico">

    <title>Welcome To Admin Panel Section</title>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    
    
    <link href="<?php echo base_url(); ?>assets/css/bootstrap.css" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="<?php echo base_url(); ?>assets/css/custom.css" rel="stylesheet">
      
      
    <link href="<?php echo base_url(); ?>assets/css/font-awesome.css" rel="stylesheet">
	
    
   </head>

  <body>

  <nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="discussion">Buk_UG_Forum</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li class="active"><a href="<?php echo base_url(); ?>discussion">Home <span class="sr-only">(current)</span></a></li>
      
       
      </ul>
      
      <ul class="nav navbar-nav navbar-right">
      
        <?php if($this->session->userdata('logged_in')):?>
        <li><a href="<?php echo base_url(); ?>admin/logout">Logout</a></li>
        <?php endif;?>
        
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>

                   