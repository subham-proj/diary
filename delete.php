<?php


$connect= mysqli_connect('localhost','root');
session_start();
mysqli_select_db($connect,'app');




    $sql = "DELETE FROM `user-data` WHERE user_id={$_POST['id']}   LIMIT 1 ";
    mysqli_query($connect,$sql)  or die(mysqli_error($connect));

    
       
        








header('location: ./prev-entry.php');

?>