<?php

require "init.php";

    $table = $_COOKIE["group"];

    $sql = "select * from $table order by id desc limit 30; ";
    $res = mysqli_query($con,$sql);
?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">

  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>GIT Placements</title>
    
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <!--script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script-->
  <!--script src="js/bootstrap.min.js"></script-->
    
  <link rel="stylesheet" type="text/css" href="styles/inline.css">

  <!-- Manifest file -->
    <link rel="manifest" href="/manifest.json">
    
  <meta name="apple-mobile-web-app-capable" content="yes">
  <meta name="apple-mobile-web-app-status-bar-style" content="black">
  <meta name="apple-mobile-web-app-title" content="GIT App">
  <link rel="apple-touch-icon" href="images/git152.png">
    
  <meta name="msapplication-TileImage" content="images/git144.png">
  <meta name="msapplication-TileColor" content="#fff">
         
    
    <style>
    
        .imgstyle
        {
            margin-top: 50px;
            width: 80px;
        }
        
        .mydata
        {
            margin-top: 40px;
            width: 300px;
        }
    
        .board
        {
            font-size: 20px;
            
        }
        
    </style>
    
    
</head>
    
<body style="background-color: #ffffff;">

  <header class="header" style="height: 62px; background-color: #f50057; box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19); " >
    <h1 class="header__title" align="left" style="color: #fff; font-size: 20px; font-weight: 400;">Buses</h1>
    
  </header>

  <main class="main" >
    
      <div class="row" align="center" >
          
          <div class="col-xs-12 col-md-12" id="place">
          
              <img src="images/bus2.png" class="imgstyle" >
              
              <p class="mydata">Real time bus tracking on Google Maps, bus crowd density, probability of getting a seat and much more.<br><br>Starting from this semester.</p>
              <br>
              <br>
              
              <p class="board"> </p>
            
              
          </div>
         
          
      
      </div>
        
      
       <br>
          <br>
  </main>

  
    
</body>
</html>
