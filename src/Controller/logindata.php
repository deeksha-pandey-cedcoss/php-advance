<?php
include "../config.php";
$_SESSION['details']=[];
$email=$_GET['email'];
    $pass=$_GET['pass'];
    array_push($_SESSION['details'],$email,$pass);
$data="INSERT INTO `users` VALUES(NULL,'Deeksha','$email','$pass')";
$stmt = mysqli_query($connection,$data);
$sql= "SELECT * FROM `users`";
    $sql_stmt = mysqli_query($connection,$sql);
    $num = mysqli_num_rows($sql_stmt);
    $str="";
    if($num>0){
        $r=mysqli_fetch_assoc($sql_stmt);
        while($r=mysqli_fetch_assoc($sql_stmt)){  
     $str.= "" ."<tr><td>".$r["id"]. "</td>".""."<td>".$r["name"]."</td>". ""."<td>".$r["email"]."</td>"."<td>".$r["password"]."</tr>";
        }} 
        $_SESSION['details']=base64_encode($str);   
       
?>