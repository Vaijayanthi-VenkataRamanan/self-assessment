<?php
include ("class/users.php");
$email=$_SESSION['$email'];
$profile=new users;
$profile->users_profile($email);
//$profile->cat_show();
//print_r($profile->cat);
//print_r($profile->data);
?>

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
      <!--<ul class="nav navbar-nav">
        <li><a href="Aptitude.php" style="color:#328CC1">Aptitude Quiz </a></li>
        <li><a href="program.php" style="color:#328CC1">Programming Quiz </a></li>
        <li><a href="design.php" style="color:#328CC1">Designing Quiz </a></li>
      </ul>-->
        <ul class="nav navbar-nav navbar-right">
            <li><a href="login.php" style="color:#328CC1">sign In </a></li>
            <li><a href="register.php" style="color:#328CC1">sign Up </a></li>
            <li><a href="contact.php" style="color:#328CC1">Contact us </a></li>
            <<!--li><p class="navbar-text navbar-right" style="color:#D9B310">Welcome<a href="profile.php" class="navbar-link" style="color:#328CC1">Vaijayanthi</a><span class="badge">3</span></p></li>-->
            
       
    </div>
  </div>
    </div>  
    </div>       
    </div>
    </div>
  
    <!--BODY-->
 <div class="container-fluid">
      <div class="row">
        <div class="col-sm-3 col-md-2 sidebar">
          <ul class="nav nav-sidebar">
            <li class="active"><a href="#">Start Quiz <span class="sr-only">(current)</span></a></li>
            <li><a href="#">questions
              </a></li>
            
          </ul>
         
        </div>
           <h2 class="sub-header" >Welcome</h2>
          <div class="table-responsive" style="margin-left: 209px;width: 1105px;">
            <table class="table table-striped">
              <thead>
                <tr>
                  <th>USER NAME</th>
                  <th>Email Address</th>
                </tr>
              </thead>
              <tbody>
                  <?php
                    foreach($profile->data as $prof)
                  {?>
                  <tr>
                 <td><?php echo $prof['username']; ?></td>
                 <td><?php echo $prof['email'];?></td>
                </tr>
                <tr>
              </tbody>
                  <?php    }?>
            </table>
          </div>

          <div class="container" style="margin-left: 209px;width: 1145px;">
  <h2>Online Quiz: Select Your Subject here</h2>
  <!--<p>The form below contains two dropdown menus (select lists):</p>-->
  
    <div class="form-group"><br>
      <label for="sel1">Select list (select one):</label>
      <form method="post" action="ques_show.php" >
      <select class="form-control" id="" name="cat">
        <?php
      $profile->cat_show();
      foreach($profile->cat as $category)
      {?>
        <option value=<?php echo $category['id']; ?>><?php echo $category['cat_name'];?></option>
        <?php }?>
      </select>
      <form action="ques_show.php" method="post" class="btn btn-primary" style="margin-left: 435px;margin-top: 45px;">    
   
        <input type="submit" value="Submit" class="btn btn-primary" style="margin-left: 435px;margin-top: 45px;"/>
      </div>
  </form>
</div>
</form>
    </body>
</html>