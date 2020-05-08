<?php
session_start();
?>
<html>
<head>
    <title>
        Home page
    </title>
</head>
<body>
    <h1> Hello World</h1>
    <a href="logout.php">Logout </a>
    <h1> WELCOME 
    
    <?php echo $_SESSION['name'];  ?>
    
    </h1>
   
    
</body>    
</html>
