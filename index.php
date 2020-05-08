
<html>
<head>
    <link rel="icon" href="./images/icon1.png">
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">


    <!-- google font -->
    <link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Kalam&display=swap" rel="stylesheet">

    <!--icon CSS-->
    
    <script src="https://use.fontawesome.com/3451fc7f4c.js"></script>
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
   
    <script src="https://code.jquery.com/jquery-3.5.0.js"></script>


<title>e Journal</title>
<style>
    body{
        width: 100%;
        height: 100vh;
        background: linear-gradient(rgba(0,0,0,.5),rgba(0,0,0,.10)), url("./images/i2.jpg") no-repeat center ;
        
        background-size: cover;
        
    }

    @media (min-width: 800px) and (max-width: 850px) {
            .navbar:not(.top-nav-collapse) {
                background: #1C2331!important;
            }
        }
.view,body,html{height:100%}.navbar{background-color:rgba(0,0,0,.2)}.page-footer,.top-nav-collapse{background-color:#1C2331}@media only screen and (max-width:768px){.navbar{background-color:#1C2331}}
    
        .main{
            width: 100%;
            height: 80vh;
            justify-content: center;
            display: flex;
            align-items: center;
            
            
        }

       #main-2{
            justify-content: center;
            display: flex;
            align-items: center;
       } 

       .icon-bar {
  position: fixed;
  top: 50%;
  -webkit-transform: translateY(-50%);
  -ms-transform: translateY(-50%);
  transform: translateY(-50%);
}

.icon-bar a {
  display: block;
  text-align: center;
  padding: 16px;
  transition: all 0.3s ease;
  color: white;
  font-size: 20px;
}

.icon-bar a:hover {
  background-color: #000;
}

.facebook {
  background: #3B5998;
  color: white;
}

.twitter {
  background: #55ACEE;
  color: white;
}

.google {
  background: #dd4b39;
  color: white;
}

.linkedin {
  background: #007bb5;
  color: white;
}

.instagram {
  background: rgb(158, 40, 103);
  color: white;
}

.content {
  margin-left: 75px;
  font-size: 30px;
}

.alert-msg{
  justify-content: center;
  align-items: center;
  display: flex;
}

</style>

</head>
<body >
    
    <nav class="navbar navbar-expand-lg navbar-dark scrolling-navbar">
        
        <div class="container">
        <a class="navbar-brand" href="#" style="font-family: 'Dancing Script', cursive; font-size: 40px; "> e Journal</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
      
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item active">
              <a class="nav-link" href="#" class="nav-link border border-light rounded">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <!--Modal Login ------------------------------------------------------>

              <a class="nav-link" href="#" class="nav-link border border-light rounded" data-toggle="modal" data-target="#myModal1">Login</a>
              
              <div class="modal fade" id="myModal1" tabindex="-1" role="dialog" aria-labelledby="myModalLable" aria-hidden="true">
                <div class="modal-dialog">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title" id="myModalLable">Login
                      </h5>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                    </div>
                    <div class="modal-body">
                      <!--Login form------------------------------------------->
                      <form method="post" action="./login/login-validation.php">
                        <div class="form-group ">
                          <i class="fa fa-user" aria-hidden="true"></i>
                          <label for="exampleInputEmail1" style="font-weight: bold;">Email address</label>
                          <input type="email" class="form-control" name="email" id="exampleInputEmail1" aria-describedby="emailHelp" style="background-color: transparent;";>
                          
                        </div>
                        <div class="form-group ">
                          <i class="fa fa-unlock-alt" aria-hidden="true"></i>
                          <label for="exampleInputPassword1" style="font-weight: bold;">Password</label>
                          <input type="password" class="form-control" name="password" id="exampleInputPassword1" style="background-color: transparent;";>
                            
                        </div>
                       
                        <div class="modal-footer">
                          <button type="submit" id="login"class="btn btn-primary w-50">Login</button>
                          
                        </div>
                        
                      </form>


                      <!--Login form------------------------------------------->
                    </div>
                    
                  </div>
                </div>
              </div>
              

              <!--Modal Login End------------------------------------------------------------------->


            </li>
            
          </ul>
          
        </div>
    </div>
      </nav>

      <?php
    if(isset($_GET['message']))
    {
        $message= $_GET['message'];
        ?>
        <div class="alert alert-danger container" id="alert" role="alert">
          <div class="alert-msg"><?php echo $message; ?></div>
          <script>
      
      $( "#alert" ).fadeOut( 5000, function() {
    // Animation complete.
 
});
    </script>
        </div>
        
        
        
        
        <?php 
    }
    ?>
    
       
    
    

<div class="main">
    <h1 style="font-family: 'Kalam', cursive;text-shadow: 2px 1.2px white; color: white;text-align: center;">
        The best online daily diary<br>
        Maintain your journal online with us<br><br>
        
        <!--Modal Reister End------------------------------------------------------------------->
        <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#myModal2" style="font-family: Arial, Helvetica, sans-serif; width: 70%; font-size:xx-large;">
            Sign Up for free Now
          </button>
          
          <div class="modal fade" id="myModal2" tabindex="-1" role="dialog" aria-labelledby="myModalLable" aria-hidden="true" style="font-family: sans-serif;">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="myModalLable">Sign Up</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="modal-body" >
                  <!--Reigistraion form-------------------------------------->
                  <form method="post" action="./login/store.php">
                    <div class="form-group ">
                      <input type="text" class="form-control" name="firstname" placeholder="First Name" style="background-color: transparent;";>
                      
                    </div>
            
                    <div class="form-group ">
                      <input type="text" class="form-control" name="lastname" placeholder="Last Name" style="background-color: transparent";>
                      
                    </div>
                    
                    <div class="form-group ">
                      <input type="email" class="form-control" name="email" placeholder="Email" style="background-color: transparent";>
                      
                    </div>
                    <div class="form-group ">
                      <input type="password" class="form-control" name="password"  placeholder="Password" style="background-color: transparent";>
                    </div>
            
            
                    <div class="modal-footer">
                      <button type="submit" class="btn btn-success w-50">Create Account</button>
                      
                    </div>
                  </form>
                  <!--Reigistraion form-------------------------------------->
                </div>

                </div>
                
              </div>
            </div>
          </div>

         <!--Modal Register End-------------------------------------------------------------------> 
    </h1>

  



    
    
  
  

  <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

</body>

</html>