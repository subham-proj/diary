
<!doctype html>
<html lang="en">
  <head>
  <link rel="icon" href="./images/icon3.png">
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
     <link href="https://fonts.googleapis.com/css2?family=Crete+Round&display=swap" rel="stylesheet">
    

    <style>

      body{
          margin:0;
          padding:0;
        width: 100%;
        height: 100vh;
        background-color: #535A60;
        
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

.date{
            font-size: 15px;
            padding: 10px;
            color: white;
            text-shadow: 2px 2px 4px black;
            font-family: 'Orbitron', sans-serif;

          }

          .center-input{
            padding-top: 50px;
            justify-content: center;
            display: flex;
            align-items: center;
          }
        .input-board{
          
          padding-top: 0;
          height: 80vh;
          width: 70vw;
          background-color:white;
          box-shadow:0.2em 0.2em 0.7em black, inset 0 0 0.7em #b5e1ff;

        }

        .input-1{
          font-size: 25px;
          font-family: 'Crete Round', serif;
          padding-left: 10px;
          width: 100%;
          height: 10%;
        } 

        .date-display{
          padding-top:10px;
          padding-left: 15px;
          
        }

        .input-2{
          border: 0;
          box-shadow: none;
          padding-left: 15px;
          width: 100%;
          height: 55vh;
        }
       
        .save-bt{
          float: right;
          padding-right: 40px;
          
        }

        .home-button-main a{
          padding: 8px 30px 8px 20px;
          font-size: 40px;
          color: black;
          display: block;
          transition: 0.3s;
          justify-content: center;
          display: flex;
          text-align: center;

        }

        .home-button-main a:hover {
  color: #f1f1f1;
} 
        .nv-align{
          justify-content: center;
          align-items: center;
          display: flex;
          text-align: center;
        }
        

    </style>

    
    
    
    <title>Make Entry</title>
  </head>
  <body>
    
    
    



    <nav class="navbar navbar-expand-lg navbar-dark scrolling-navbar">
        
      <div class="container">
      <a class="navbar-brand" href="./dashboard.php" style="font-family: 'Dancing Script', cursive; font-size: 40px; "> e Journal</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
    
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item">
            <a class="nav-link" href="./dashboard.php" class="nav-link border border-light rounded"> <span style="font-size: 20px;">Home</span> </a>
          </li>
          

          <li class="nav-item">
              

            <a class="nav-link" href="./login/logout.php" class="nav-link border border-light rounded" > <span style="font-size: 20px;">Sign Out </span></a>
            
            </li>
            
            </ul>
            
                  </div>
                  
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
        <form method="post" action="./save-entry.php">
        <div class="center-input">
        <div class="input-board ">
          <input class="input-1" type="text" name="title"  placeholder="Enter Title"></input>

          

          <div class="date-display">
            <i class="fa fa-calendar" aria-hidden="true"></i>
            <?php $date = date_default_timezone_set('Asia/Kolkata');
                  $day = date('l');
                  $date = date('d-m-y');
                    echo "$day ,&nbsp; $date"; 
              ?>
                
          </div>
          <hr>

          

          <textarea class="input-2" name="content" placeholder="Start writing ...."></textarea>
          
          

            <div class="save-bt">
              
                <button type="submit" name="submit" class="btn btn-success">Save</button>
              
            

      </div>
        </div>
        </form>

        
     
        
    
    
      
    
    
 
    
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>