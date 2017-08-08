<!--REGISTRATION SUB PHP NOT LOG IN ITS SIGN UP-->

<html>
<body>
 <?php
    #echo "This is sign up Page";
    #echo $username;
    include("class/users.php");
    $register=new users; #object_creation
    extract($_POST);
    $query="insert into user values('$username','$email','$password','$confirm_password')";
    if($register->signup($query))
    {
        $register->url("register.php?run=success");
    }
    ?>
</body>
</html>