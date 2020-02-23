<?php 
 
$host="localhost";
$user="root";
$password="";
$db="achievers";
 
$con=mysqli_connect($host,$user,$password);
mysqli_select_db($con, $db);
 
if(isset($_POST['create'])){
    
    $uname=$_POST['unameL'];
    $password=$_POST['pswL'];
    
    $sql="select * from login where Username='".$uname."'AND Password='".$password."' limit 1";
    
    $result=mysqli_query($con, $sql);
    
    if(mysqli_num_rows($result) == 1){
        echo " You Have Successfully Logged in";
        exit();
    }
    else{
        echo " You Have Entered Incorrect Password";
        exit();
    }
        
}
?>