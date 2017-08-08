<?php
include ("class/users.php");
$cat=new users;
$category=$cat-> cat_shows();
//print_r($category);
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
    <link rel="icon" href="favicon.ico">

    <title>Admin profile Bootstrap</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <link href="css/ie10-viewport-bug-workaround.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="dashboard.css" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="../../assets/js/ie-emulation-modes-warning.js"></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
      </head>

  <body>

    <nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container-fluid">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">Project name</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav navbar-right">
            <li><a href="#" >Dashboard</a></li>
            <li><a href="#">Settings</a></li>
            <li><a href="#">Profile</a></li>
            <li><a href="#">Help</a></li>
          </ul>
          <form class="navbar-form navbar-right">
            <input type="text" class="form-control" placeholder="Search...">
          </form>
        </div>
      </div>
    </nav>

    <div class="container-fluid">
      <div class="row">
        <div class="col-sm-3 col-md-2 sidebar">
          <ul class="nav nav-sidebar" style="padding-left: 0;margin-top: 15px;list-style: none;">
            <li class="active"><a href="#">Overview <span class="sr-only">(current)</span></a></li>
            <li><a href="#">Reports</a></li>
            <li><a href="#">Analytics</a></li>
            <li><a href="#">Export</a></li>
          </ul>
          <ul class="nav nav-sidebar">
            <li><a href="">Nav item</a></li>
            <li><a href="">Nav item again</a></li>
            <li><a href="">One more nav</a></li>
            <li><a href="">Another nav item</a></li>
            <li><a href="">More navigation</a></li>
          </ul>
          <ul class="nav nav-sidebar">
            <li><a href="">Nav item again</a></li>
            <li><a href="">One more nav</a></li>
            <li><a href="">Another nav item</a></li>
          </ul>
        </div>
    
              
        <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
             <form method="post" action="add_quiz.php" style="margin-top: -435px;margin-right: 0px;margin-bottom: 20px;margin-left: 0px;">
             <div class="form-group">
                <label for="ques">Question :</label>
                <input type="text" class="form-control" name="ques" id="ques" placeholder="Enter your Question here.">
            </div>

            <div class="form-group">
                <label for="op1">Option 1</label>
                <input type="text" class="form-control" name="op1" id="ans1" placeholder="Enter your first option here">
            </div>

            <div class="form-group">
                <label for="op2">Option 2</label>
                <input type="text" class="form-control" name="op2" id="ans1" placeholder="Enter your second option here">
            </div>

            <div class="form-group">
                <label for="op3">Option 3</label>
                <input type="text" class="form-control" name="op3" id="ans1" placeholder="Enter your third option here">
            </div>

            <div class="form-group">
                <label for="op4">Option 4</label>
                <input type="text" class="form-control" name="op4" id="ans1" placeholder="Enter your fourth option here">
            </div>

            <div class="form-group">
                <label for="answer">Answer</label>
                <input type="text" class="form-control" name="ans" id="ans1" placeholder="Enter your Correct answer here">
            </div>
 

            <label for="category">Select your category</label>
           <select class="form-control" id="" name="cat" placeholder="select your category">
                
                <option value="">choose category</option>
                <?php
                 foreach ($category as $c)
                    {
                      echo "<option value=".$c['id'].">".$c['cat_name']."</option>";
                    }
                ?>
            </select>
          <br>
          <form action="ques_show.php" method="post" class="btn btn-primary" style="margin-left: 435px;margin-top: 45px;">    

            <div class="form-group"> 
                 <div class="col-sm-offset-2 col-sm-10">
                     <button type="submit" class="btn btn-default" style="margin-left: 280px;">Submit</button>
                 </div>
             </div>
<?php
        if(isset($_GET['run']) && $_GET['run']=="failed")
        {
           echo "<mark>DATA INSERTED SUCCESSFULLY </mark>";
        }
        ?>
    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery.min.js"><\/script>')</script>
    <script src="../../dist/js/bootstrap.min.js"></script>
    <!-- Just to make our placeholder images work. Don't actually copy the next line! -->
    <script src="../../assets/js/vendor/holder.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="../../assets/js/ie10-viewport-bug-workaround.js"></script>
  </body>
</html>
