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
          <li><a href="a_login.php" style="color:#328CC1">Admin Login </a></li>
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



<?php
include ("class/users.php");
$ques=new users;
$cat=$_POST['cat'];
$ques->ques_show($cat);
$_SESSION['cat']=$cat;
$ques->ques;
?>

<div class="container">
<div class="col-sm-2"></div>
<div class="col-sm-8">
  <h2>Online Quiz in PHP</h2>
  <form method="post" action="answer.php">
  <?php 
    $i=1;
  foreach ($ques->ques as $qust) 
  {?>
  <table class="table table-bordered">
    <thead>
      <tr>
        <th> <?php echo $i;?>&emsp;<?php echo $qust['question'];?></th>
      </tr>
    </thead>
    <tbody>
    <?php if(isset($qust['ans1'])){?>
      <tr>
        <td>&nbsp; 1 &nbsp;<input type="radio" value='0' name="<?php echo $qust['id']; ?>"/><?php echo $qust['ans1'];?></td>
       </tr>
    <?php }?>  
    <?php if(isset($qust['ans2'])){?>
      <tr>
        <td>&nbsp; 2 &nbsp;<input type="radio" value='1' name="<?php echo $qust['id']; ?>"/><?php echo $qust['ans2'];?></td>
      </tr>
     <?php }?>
     <?php if(isset($qust['ans3'])){?>   
      <tr>
        <td>&nbsp; 3 &nbsp;<input type="radio" value='2' name="<?php echo $qust['id']; ?>"/><?php echo $qust['ans3'];?></td>
      </tr>
      <?php }?>
      <?php if(isset($qust['ans4'])){?>
      <tr>
        <td>&nbsp; 4 &nbsp;<input type="radio" value='3' name="<?php echo $qust['id']; ?>"/><?php echo $qust['ans4'];?></td>
      </tr>
      <?php }?>
      <tr class="info">
        <td><input type="radio" checked="checked" style="display:none" value="No Attempt" name="<?php echo $qust['id']; ?>"/>
      </tr>
     </tbody>
  </table>
  <?php $i++;}?>
  <center><input type="submit" value="submit" class="btn btn-success"/></center>
</form>
</div>
<div class="col-md-2"></div>
</div>
</body>
</html>
