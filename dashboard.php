<?php
session_start();
?>



<!doctype html>
<html lang="en">
 
  <head>

  <link rel="icon" href="./images/icon2.png">
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    
     <!--Google Icon Font-->
     <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	  
     <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:ital,wght@1,600&display=swap" rel="stylesheet">

    <style>
        body{
          margin:0;
          padding:0;
        width: 100%;
        height: 100vh;
        background: linear-gradient(rgba(0,0,0,.5),rgba(0,0,0,.10)), url("./images/home-1.jpg") no-repeat center;
        background-image: blur(8px);
        background-size: cover;
        
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

      .greeting{
            width: 100%;
            height: 80vh;
            justify-content: center;
            display: flex;
            align-items: center;
            
            
            
        }

        .box-container {
          margin: 10px auto;
          height: 80%;
          display: flex;
          justify-content: center;
          
        }

        .box-row {
            width: 100%;
            display: flex;
            justify-content: center;
            align-items: center;
        }



        .board {
          margin: 10px;
           height: 45vh;
           width: calc(100% - 50%);
            background-color : #409FE4;
          border: 0.5px solid black;
          border-left : 40px solid black;
          box-shadow: 0 10px 16px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
          font-size: 2.5em;
          font-weight: bold;
          color: black;
          text-align: center;
          line-height: 400px;
          border-radius: 12px;
        }

        .board h1{
          font-family: 'Bangers', cursive; 
            word-spacing:10px; 
            text-shadow: 2px 2px 4px blue;
            margin-top: 130px;

        }
          #entry{
            margin-top: -145px;
            
          }

          .date{
            font-size: 15px;
            padding: 10px;
            color: white;
            text-shadow: 2px 2px 4px black;
            font-family: 'Orbitron', sans-serif;

          }



    </style>

  

    <!-- google font -->
     <link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@700&display=swap" rel="stylesheet">
     <link href="https://fonts.googleapis.com/css2?family=Bangers&display=swap" rel="stylesheet">
     <script src="https://use.fontawesome.com/3451fc7f4c.js"></script>
     <link href="https://fonts.googleapis.com/css2?family=Kalam&display=swap" rel="stylesheet">
     <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:ital,wght@1,600&family=Orbitron:wght@600&display=swap" rel="stylesheet">



    <title>Dashboard</title>
  </head>
  <body>
    
    <!-- Image and text -->
<nav class="navbar navbar-expand-lg navbar-dark scrolling-navbar">
    
        <div class="nav-item">
            <div id="main">
                <button class="openbtn btn btn-outline-dark"   onclick="openNav()"><i class="fa fa-bars" aria-hidden="true"></i></button>
                
              </div>

              <div id="mySidebar" class="sidebar">
                <a href="javascript:void(0)" class="closebtn" onclick="closeNav()"><i class="fa fa-times" aria-hidden="true"></i></a>
                <a href="./dashboard.php"><i class="fa fa-home" aria-hidden="true"></i>  Home</a>
                <a href="./prev-entry.php"><i class="fa fa-chevron-circle-left" aria-hidden="true"></i>  Previous Entries</a>
                <a href="./login/logout.php"><i class="fa fa-sign-out" aria-hidden="true"></i>  Sign Out</a>
              </div>
              
        
    </div>
    <!-- <div class="container"> -->
    <a class="navbar-brand" href="#" style="font-family: 'Dancing Script', cursive; font-size: 40px; ">
      
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
    

  </nav>

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
    
    <div class="box-container"> 
      <div class="box-row">
          <div class="greeting">
              <div class="board">
             <h1 >
            
              <?php echo "$_SESSION[firstname]'s";?> Diary 
             </h1>
             <div id="entry">
             <a href="./login/upload.php" class="btn btn-success" style="font-family: Arial, Helvetica, sans-serif;" ><i class="fa fa-pencil-square-o fa-0.1x" aria-hidden="true"></i> New Entry</a>
            </div>
      </div>
            
      </div> 
    </div>
      </div>

      



    
    
  
    
    
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS,  -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
   
    </body>
</html>