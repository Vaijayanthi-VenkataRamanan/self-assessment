<?php
include ("class/users.php");
//print_r($_POST);
$ans=new users;
$answer=$ans->answer($_POST);
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
    <style>
    .table {
    width: 50%;
    max-width: 50%;
    margin-bottom: 20px;
    margin-left: 350px;
    border-style: solid;
    border-width: 1px;
}
    </style>
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
    <!--center-->
    <center>
    <h2>Your Results</h2>
  <p>You scored.</p></center>            
  <table class="table table-striped">
    <thead>
      <tr>
        <th>S.No</th>
        <th>Question Answer Status</th>
        <th>Marks Obtained</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>1</td>
        <td>Right Answer</td>
        <td><?php echo $answer['right'];?></td>
      </tr>
      <tr>
        <td>2</td>
        <td>Wrong Answer</td>
        <td><?php echo $answer['wrong'];?></td>
      </tr>
      <tr>
        <td>3</td>
        <td>Not Answered</td>
        <td><?php echo $answer['No Attempt'];?></td>
      </tr>
      </tbody>
  </table>
</div>

   <!--<center>
        <h2>Right answer: </h2><?php echo $answer['right'];?>
        <h2>Wrong answer: </h2><?php echo $answer['wrong'];?>
        <h2>No answer: </h2><?php echo $answer['No Attempt'];?>
         <?php
        $total_ques=$answer['right']+$answer['wrong']+$answer['No Attempt'];
        $attempt_ques=$answer['right']+$answer['wrong'];
        ?>
        -->
      
<!--#TO DISPLAY IN FORM OF TABLE>>>UI DESIGN TO BE DONE!!! CREATE A TABLE HERE-->
<!--//RESULT CALCULATION-->
       <center> <?php 
        $percentage=($answer['right']*100)/$total_ques;?>
        <h2>Percentage:</h2> &nbsp;&nbsp;&nbsp;<?php echo $percentage;?>%</center>

    </body>
    </html>
