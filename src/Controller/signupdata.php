<?php
include "../config.php";
// registration details
if(isset($_POST)){
    $name=$_POST['name'];
    $email=$_POST['email'];
    $pass=$_POST['pass'];   
}
    setcookie ("email",$_POST["email"],time()+ 86400*30, "/");
	setcookie ("password",$_POST["pass"],time()+ 86400*30, "/");
    
	echo "Cookies Set Successfuly";
    $data ="INSERT INTO `users` VALUES (NULL,'$name','$email','$pass')";
    $result=mysqli_query($connection,$data);




?>







