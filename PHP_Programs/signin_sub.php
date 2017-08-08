<html>
<body>
 <?php
    #echo "This is sign up Page";
    #echo $username;
    include("class/users.php");
   $signin =new users;
   extract($_POST);
   if($signin->signin($e,$p))
   {
       $signin->url("profile.php");
   }
   else
   {
       $signin->url("login.php?run=failed");
   }
    ?>
</body>
</html>