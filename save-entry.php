<?php 

$connect= mysqli_connect('localhost','root');
session_start();
mysqli_select_db($connect,'app');



$unique_id=$_SESSION['id'];



if(isset($_REQUEST["submit"]))
{
    

    
    $title=$_REQUEST['title'];
    $content=$_REQUEST['content'];
    
    

    $query="INSERT INTO `user-data` ( `date`, `title`, `content`, `unique_id`) 
                VALUES (CURRENT_DATE(), '$title', '$content', '$unique_id');";
    
    mysqli_query($connect,$query);

    
}

header('location: ./prev-entry.php');

?>