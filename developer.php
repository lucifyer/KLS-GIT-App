<?php

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
            margin-top: 25px;
            width: 89px;
        }
        
        .mydata
        {
            margin-top: 30px;
            width: 300px;
        }
    
        .board
        {
            font-size: 18px;
            
        }
        
        .dev
        {
            margin-top: 40px;
            font-size: 12px;
        }
        
        .shreyas
        {
            font-size: 17px;
        }
        
    </style>
    
    
</head>
    
<body style="background-color: #ffffff;">

  <header class="header" style="height: 62px; background-color: #0084ff; box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19); " >
    <h1 class="header__title" align="left" style="color: #fff; font-size: 20px; font-weight: 400;">Developers</h1>
    
  </header>

  <main class="main" >
    
      <div class="row" align="center" >
          
          <div class="col-xs-12 col-md-12" id="place">
          
              <img src="images/git256.png" class="imgstyle" onclick="shreyas()" />
              
              <p class="mydata">Designed and Developed by<br><span class="shreyas">Shreyas Halgekar</span><br><span class="dev">7th Semester, CSE 2018-19</span></p>
              
              
              
              
              <p class="mydata">Smart Lights by<br><span class="shreyas">Vinod Patil</span><br><span class="dev">7th Semester, CSE 2018-19</span></p>
              
              
              
              
              
              <p class="mydata">App Logo by<br><span class="shreyas">Manoj Jahgirdar</span><br><span class="dev">7th Semester, CSE 2018-19</span></p>
              <br>
              <br>
              
              
              
              
              <p class="board">Like an app. Unlike any app.</p>
              
              
              <p>Made with <img src="hearth.png" style="width: 20px;" /> in GIT</p>
              
              
            
              
          </div>
         
          
      
      </div>
        
      
       <br>
          <br>
  </main>

    <script>
    
        var count=0;
        
        function shreyas()
        {
            count++;
            
            if(count>= 25)
            {
                count = 0;
                
                //alert("Think Different");
                window.location.href = 'crazy.html';
            }
        }
    
    </script>
  
    
</body>
</html>
