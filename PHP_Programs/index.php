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
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
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
     <!--carousel-->
    <div class="container-fluid">
    <div id="myCarousel" class="carousel slide" data-ride="carousel"><!--carousel control functions, class specifies that is contains carousal, .slide adds transition effect-->
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li><!--target point of the carousel, slide to specify which slide to go--> 
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>
    <!-- Wrapper for slides -->
    <div class="carousel-inner" style="margin-top: -20px;height:500px;">
      <div class="item active">
        <img src="img/at.png" alt="Aptitude Test" style="width:100%;height:750px">
      </div>
       
      <div class="item">
        <img src="img/dt.jpg" alt="Designing Test" style="width:100%;height:750px">
      </div>
    
      <div class="item">
        <img src="img/pt.jpg" alt="Programming Test" style="width:100%;height:750px">
      </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
      <img src="img/prev.png" style="margin-top: 185px; margin-left: -125px">
    </a>
    <a class="right carousel-control" href="#myCarousel" data-slide="next">
      <img src="img/next.png" style="margin-top: 185px; margin-left: 130px">
    </a>
  </div>
</div>

    <div class="container" style="background-color: #0B3c5d;width: 1319px;">
      <!-- Example row of columns -->
      <div class="row">
        <div class="col-md-4">
          <h2 style="color:#328CC1">Aptitude Quiz</h2>
          <p style="color:#D9B310">Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>
          <p><a class="btn btn-default" href="profile.php" role="button" style="a">View details &raquo;</a></p>
        </div>
        <div class="col-md-4">
          <h2 style="color:#328CC1">Programming Quiz</h2>
          <p style="color:#D9B310">Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>
          <p><a class="btn btn-default" href="profile.php" role="button">View details &raquo;</a></p>
       </div>
        <div class="col-md-4">
          <h2 style="color:#328CC1">Designing Quiz</h2>
          <p style="color:#D9B310">Donec sed odio dui. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Vestibulum id ligula porta felis euismod semper. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</p>
          <p><a class="btn btn-default" href="profile.php" role="button">View details &raquo;</a></p>
        </div>
      </div>

  </body>
</html>