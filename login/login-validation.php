<?php

$connect= mysqli_connect('localhost','root');
session_start();
mysqli_select_db($connect,'app');


$email= $_POST['email'];
$password = $_POST['password'];


$sql= "SELECT * FROM `new-user` WHERE email='$email' && password='$password' ";

$result= mysqli_query($connect,$sql);

$data = mysqli_fetch_row($result);

$num = mysqli_num_rows($result);

if($num == 1){
        $_SESSION['id']=$data[0];
        $_SESSION['firstname']=$data[1];
        $_SESSION['lastname']=$data[2];
        $_SESSION['email']=$data[3];
        
        

        header('location:../dashboard.php');

      
}
else{
    
    header('location:../index.php?message=Invalid Email or Password');
}




?>

