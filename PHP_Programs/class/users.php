<?php
session_start();
class users{
    public $host="localhost";
    public $username="root";
    public $pass="";
    public $db_name="online_php_quiz";
    public $conn;
    public $data;
    public $cat;
    public $ques;
    #constructor
    public function __construct()
    {
        $this->conn=new mysqli($this->host,$this->username,$this->pass,$this->db_name);
        if($this->conn->connect_errno)
        {
            die("database connection failed".$this->conn->connect_errno);
        }
    }
    public function signup($data)
    {
        $this->conn->query($data);
        return true;
    }
    
    public function signin($email,$pass)
    {
      # echo $email;
        $query=$this->conn->query("select email,password from user where email='$email' and password='$pass'");
        $query->fetch_array(MYSQLI_ASSOC);
        if($query->num_rows>0){
            $_SESSION['$email']=$email;
            return true;
        }
        else
        {
            return false;
        }
    }

    #Profile Page
    public function users_profile($email)
    {
        //echo $email;
        $query=$this->conn->query("select * from user where email='$email'");
        $row=$query->fetch_array(MYSQLI_ASSOC);
        if($query->num_rows>0)
        {
            $this->data[]=$row;
        }
        return $this->data;
    }

  
   public function ques_show($ques)
    {
        $query=$this->conn->query("select * from questions where cat_id='$ques'");
        while($row=$query->fetch_array(MYSQLI_ASSOC))
        {     
           $this->ques[]=$row;
        }
        //echo $ques;
        
    }
    public function answer($data)
    {
        $ans=implode("",$data);
        $right=0;
        $wrong=0;
        $no_answer=0;
        //print_r($data);
         $query=$this->conn->query("select id,ans from questions where cat_id='".$_SESSION['cat']."'");
        while($qust=$query->fetch_array(MYSQLI_ASSOC))
        {     
           if($qust['ans']==$_POST[$qust['id']])
           {
               $right++;
           }
           elseif ([$qust['id']=="No Attempt"])
           {
               $no_answer++;
           }
           else
           {
               $wrong++;
           }

        }
        
        $array=array();
        $array['right']=$right;
        $array['wrong']=$wrong;
        $array['No Attempt']=$no_answer;
        return $array;
        //echo $ques;
        

    }
  
  
  public function admin_signin($email)
    {
      # echo $email;
       $query=$this->conn->query("select * from user where email='$email'");
        $row=$query->fetch_array(MYSQLI_ASSOC);
        if($query->num_rows>0)
        {
            $this->data[]=$row;
        }
        return $this->data;
    }
   
    public function add_quiz($rec)
    {
        //echo $rec;
        $a=$this->conn->query($rec);
       /* if ($a->num_rows>0)
        {
           return true;
        }
        else
        {
            return false;
        }*/
    }

    public function cat_shows()
    {
        $query=$this->conn->query("select * from category");
        while($row=$query->fetch_array(MYSQLI_ASSOC))
        {     
           $this->cat[]=$row;
        }
        return $this->cat;
    }
   
    public function url($url)
    {
        header("location:".$url);
    }
    }

    
?>
