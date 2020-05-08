<?php

$connect= mysqli_connect('localhost','root');
session_start();
mysqli_select_db($connect,'app');

$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$email= $_POST['email'];
$password = $_POST['password'];


$sql= "SELECT * FROM `new-user` WHERE email='$email'";

$result= mysqli_query($connect,$sql);

$num = mysqli_num_rows($result);

if($num == 1){
        header('Location:../index.php?message=Account Exist');
        // echo "Account exist";
}
else{
        $query = "INSERT INTO `new-user`(`firstname`, `lastname`, `email`, `password`) 
                   VALUES ('$firstname','$lastname','$email','$password')";
        
        mysqli_query($connect,$query);

        echo "Registraion successfull";

        header('location:../index.php');
}




?>