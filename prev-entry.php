<?php
$connect= mysqli_connect('localhost','root')  ;
session_start();
mysqli_select_db($connect,'app');

$unique_id=$_SESSION['id'];


$sql= "SELECT * FROM `user-data` WHERE 1 ";
$result= mysqli_query($connect,$sql) or die(mysqli_error($connect));

$num= mysqli_num_rows($result);



?>

<!doctype html>
<html lang="en">
  <head>
  <link rel="icon" href="./images/icon4.png">
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@700&display=swap" rel="stylesheet">
     <link href="https://fonts.googleapis.com/css2?family=Bangers&display=swap" rel="stylesheet">
     <script src="https://use.fontawesome.com/3451fc7f4c.js"></script>
     <link href="https://fonts.googleapis.com/css2?family=Kalam&display=swap" rel="stylesheet">
     <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:ital,wght@1,600&family=Orbitron:wght@600&display=swap" rel="stylesheet">
     <link href="https://fonts.googleapis.com/css2?family=Indie+Flower&display=swap" rel="stylesheet">

    <style>
        body{
          margin:0;
          padding:0;
        width: 100%;
        height: 100vh;
        background: linear-gradient(to bottom, #33ccff 0%, #ff99cc 100%)
        
    }

    @media (min-width: 800px) and (max-width: 850px) {
            .navbar:not(.top-nav-collapse) {
                background: #1C2331!important;
            }
        }
.view,body,html{height:100%}.navbar{background-color:rgba(0,0,0,.2)}.page-footer,.top-nav-collapse{background-color:#1C2331}@media only screen and (max-width:768px){.navbar{background-color:#1C2331}}
 
.sidebar {
  height: 100%;
  width: 0;
  position: fixed;
  z-index: 1;
  top: 0;
  left: 0;
  background-color: #111;
  overflow-x: hidden;
  transition: 0.5s;
  padding-top: 60px;
}

.sidebar a {
  padding: 8px 8px 8px 32px;
  font-family: 'Josefin Sans', sans-serif;
  text-decoration: none;
  font-size: 20px;
  color: #818181;
  display: block;
  transition: 0.3s;
}

.sidebar a:hover {
  color: #f1f1f1;
}

.sidebar .closebtn {
  position: absolute;
  top: 0;
  right: 25px;
  font-size: 25px;
  margin-left: 50px;
}

.openbtn {
  font-size: 15px;
  cursor: pointer;
  background-color: #111;
  color: white;
  padding: 10px 15px;
  border: none;
}

.openbtn:hover {
  background-color: #444;
}

#main {
  transition: margin-left .5s;
  padding: 16px;
}

/* On smaller screens, where height is less than 450px, change the style of the sidenav (less padding and a smaller font size) */
@media screen and (max-height: 450px) {
  .sidebar {padding-top: 15px;}
  .sidebar a {font-size: 18px;}
}

.date{
            font-size: 15px;
            padding: 10px;
            color: white;
            text-shadow: 2px 2px 4px black;
            font-family: 'Orbitron', sans-serif;

          }

          .card{
            box-shadow:0.1em 0.1em 0.5em black, inset 0 0 0.7em #b5e1ff;
          }
          

          



    </style>
    
    

    <title>Previous entries</title>
  </head>
  <body>
    
    <nav class="navbar navbar-expand-lg navbar-dark scrolling-navbar">
        
        <div class="nav-item">
            <div id="main">
                <button class="openbtn btn btn-outline-dark"   onclick="openNav()"><i class="fa fa-bars" aria-hidden="true"></i></button>
                
              </div>

              <div id="mySidebar" class="sidebar">
                <a href="javascript:void(0)" class="closebtn" onclick="closeNav()"><i class="fa fa-times" aria-hidden="true"></i></a>
                <a href="./dashboard.php"><i class="fa fa-home" aria-hidden="true"></i>  Home</a>
                <a href="./entry.php"><i class="fa fa-pencil-square-o fa-0.1x" aria-hidden="true"></i>  New Entry </a>
                <a href="./login/logout.php"><i class="fa fa-sign-out" aria-hidden="true"></i>  Sign Out</a>
              </div>
              
      </div>  
  
      <!-- <div class="container"> -->
    <a class="navbar-brand" href="./dashboard.php" style="font-family: 'Dancing Script', cursive; font-size: 40px; ">
      
        e Journal
      </a>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
                <div class="date">
                 <?php $date = date_default_timezone_set('Asia/Kolkata');
                      $day = date('l');
                      $date = date('F j');
                        echo "$day ,&nbsp; $date"; ?></div>
            </li>
          
            
            <li class="nav-item">
          <a href="./login/logout.php" class="btn btn-outline-light " role="button" aria-pressed="true">Sign Out</a>
            </li>
          </ul>
      
      
        <!-- </div> -->
  </div>

    <!--Hamburger button javascript-->
    <script>
        function openNav() {
          document.getElementById("mySidebar").style.width = "250px";
          document.getElementById("main").style.marginLeft = "250px";
        }
        
        function closeNav() {
          document.getElementById("mySidebar").style.width = "0";
          document.getElementById("main").style.marginLeft= "0";
        }
        </script>
        
        <!--Javascript close-->
      
        </div>   
    </nav>

<?php
for($i=1;$i<=$num;$i++)
{
    $row=mysqli_fetch_array($result);


    if($row['unique_id']==$unique_id)
    {
      $id[$i]= $row['user_id'];
      ?>
      <div class="container py-5">
    <div class="card">
      <div class="card-header">
      <span style="float:right;">
      <form action='./delete.php?name="<?php print_r($row['user_id']); ?>"' method="post">
      <input type="hidden" name="id" value="<?php print_r($row['user_id']); ?>">
      <button type="submit" name="submit" value="delete" class="btn btn-outline-dark btn-sm">Delete</button>
      </form>
      </span>
       <?php print_r($row['title'])?>
      </div>
      <div class="card-body">
        <blockquote class="blockquote mb-0">
          <?php print_r($row['content']) ?>
          
          
          <footer class="blockquote-footer"><?php print_r($row['date']) ?></footer>
        </blockquote>
      </div>
    </div>
  </div>
    <?php
    }
    else
            {
                $id[$i]=0;
                echo "No Entries";
                
            }
      
            
  }

?>















    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>



