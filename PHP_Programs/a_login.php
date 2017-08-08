<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

    <title>Home page</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
		<link href="css/style.css" rel="stylesheet">
     </head>

  <body>

    <div class="site-wrapper">
      <div class="site-wrapper-inner">
        <div class="cover-container">
          <div class="masthead clearfix">            
              <nav class="navbar navbar-default navbar-inverse" style="background-color: #1D2731;width: 1321px;margin-left: 14px;">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="index.php" style="color:#D9B310">Self - Examination</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <!--<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li><a href="Aptitude.php" style="color:#328CC1">Aptitude Quiz </a></li>
        <li><a href="program.php" style="color:#328CC1">Programming Quiz </a></li>
        <li><a href="design.php" style="color:#328CC1">Designing Quiz </a></li>
      </ul>-->
        <ul class="nav navbar-nav navbar-right">
						<li><a href="a_login.php" style="color:#328CC1">Admin Login </a></li>
            <li><a href="login.php" style="color:#328CC1">sign In </a></li>
            <li><a href="register.php" style="color:#328CC1">sign Up </a></li>
            <li><a href="contact.php" style="color:#328CC1">Contact us </a></li>
            <!--<li><p class="navbar-text navbar-right" style="color:#D9B310">Welcome<a href="profile.php" class="navbar-link" style="color:#328CC1">Vaijayanthi</a><span class="badge">3</span></p></li>-->
            
       
    </div>
  </div>
    </div>  
    </div>       
    </div>
    </div>	
		<!--BODY-->
    <div class="container">
    	<div class="row">
			<div class="col-md-6 col-md-offset-3">
				<div class="panel panel-login">
					<div class="panel-heading">
						<div class="row">
							<div class="col-xs-12">
								<a href="a_login.php" class="active" id="login-form-link" style="margin-left:35px">Admin Login</a>
							</div>
							</div>
						<hr>
					</div>
					<div class="panel-body">
						<div class="row">
							 <?php
                    if(isset($_GET['run']) && $_GET['run']=="failed")
                    {
                        echo "<mark>Your E-mail or Password is not correct </mark>";
                    }  
                    ?>
							<div class="col-lg-12">
								<form id="login-form" action="admin_sub.php" method="post" enctype="multipart/form-data" style="display: block;">
									<div class="form-group">
										<input type="text" name="e" id="email" tabindex="1" class="form-control" placeholder="Email" value="">
									</div>
									<div class="form-group">
										<input type="password" name="p" id="password" tabindex="2" class="form-control" placeholder="Password">
									</div>
									<div class="form-group">
										<div class="row">
											<div class="col-sm-6 col-sm-offset-3">
												<input type="submit" name="login-submit" id="login-submit" tabindex="4" class="form-control btn btn-login" value="Log In">
											</div>
										</div>
									</div>
								</form>
				
  </body>
</html>