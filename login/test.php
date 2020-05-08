$user=$_SESSION['email'];
$sql= "SELECT * FROM 'new-user' WHERE email='$user' ";
$query = mysqli_query($connect,$sql);

$var = mysqli_fetch_array($query);

$email_user = $var['email'];



if(isset($_REQUEST["submit"]))
{
    

    
    $title=$_REQUEST['title'];
    $content=$_REQUEST['content'];

    
}