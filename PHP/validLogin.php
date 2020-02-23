<?php
require_once('login.php');
?>

<?php

if(isset($_POST)){
    
    $uname=$_POST['username'];
    $password=$_POST['password'];
    
    $sql="select * from login where Username='".$uname."'AND Password='".$password."' limit 1";
    
    $result=mysqli_query($con, $sql);
    
    if(mysqli_num_rows($result) == 1){
        echo " You Have Successfully Logged in";
    }
    else{
        echo " You Have Entered Incorrect Password";
    }
        
}

?>
