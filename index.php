<?php

    $name = $_COOKIE["fname"];
    
    if(strcmp($name,"") == 0)
    {
       header("Location: login.html");
        exit(); 
    }

    $background = $_COOKIE["background"];

    $font = $_COOKIE["font"];


?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">

  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>GIT App</title>
    
  <meta name="theme-color" content="#FFFFF">
    
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
    
    a:hover
        {
            text-decoration: none;
        }
        
        
        .imageStyle
        {
            width: 50px;
            height: auto;
        }
    
        
        .headerinline
        {
            background-color: #fafafa;
            background-image: url(images/<?php echo $background; ?>);
            
        }
        
        .headertitleinline
        {
            color:<?php echo $font; ?>; 
            font-size: 25px; 
            font-weight: 400;
        }
        
        .setting
        {
            width: 24px;
        }
        
        
        .maininline
        {
            background-color: #fff;
        }
        
        .rowone
        {
            margin-top: 70px;
        }
        
        .rowtwo
        {
            margin-top: 60px;
        }
        
        .cardMessage
        {
            font-size:12px;
            color: #424242; 
            margin-top: 20px;
        }
        
    </style>
    
    
    
    
    
    
    
    <script src="https://cdn.onesignal.com/sdks/OneSignalSDK.js" async=""></script>
<script>
  var OneSignal = window.OneSignal || [];
  OneSignal.push(function() {
    OneSignal.init({
      appId: "21ffd18d-e785-4202-a7c5-2e26c404e604",
    });
  });
</script>
    
    
    
    
    
    
    
    
    <script>
    
        
        function getCookie(cname) 
        {
            var name = cname + "=";
            var decodedCookie = decodeURIComponent(document.cookie);
            var ca = decodedCookie.split(';');
            
            for(var i = 0; i <ca.length; i++) 
            {
                var c = ca[i];
                
                while (c.charAt(0) == ' ') 
                {
                    c = c.substring(1);
                }
                
                if (c.indexOf(name) == 0) 
                {
                    return c.substring(name.length, c.length);
                }
            }
            
            return "";
        }
        
        
        
        function setName()
        {
                    
               var name = "Hello "+getCookie("fname")+"!";
                
                document.getElementById("name").innerHTML = " "+name; 
                
                return true;
                
        }
        
    
    </script>
    
    
</head>
    
    
    
<body style="background-color: #fafafa; background-size: cover; background-image: url(images/<?php echo $background; ?>)" >
    
    
    <header class="header headerinline" >
    <h1 class="header__title headertitleinline" align="center"  id="name">Hello <?php echo $name."!"; ?></h1><span align="right"><a href="settings.php"><img src="images/settings.png"  class="setting"></a></span>
    
      
  </header>
        

  <div class="main"  id="main" style="margin-left: 6px; margin-right: 6px;"> 
      
      <div class="row rowone" id="row1" >
          
          <div class="col-xs-4">
              
              <div align="center" >
                  <a href="noticeboard.php">
                    <img src="images/notice2.png" class="imageStyle" />
                    <p class="cardMessage">Notice Board</p>
                  </a>
              </div>
          
          
          </div>
          
          <div class="col-xs-4">
              
              <div align="center">
                  <a href="study.php">
                    <img src="images/study2.png" class="imageStyle" />
                    <p class="cardMessage">Study Material</p>
                  </a>
              </div>
          
          
          </div>
          
          <div class="col-xs-4">
              
              <div align="center">
                  <a href="placement.php">
                    <img src="images/placement2.png" class="imageStyle" />
                    <p class="cardMessage">Placements</p>
                  </a>
              </div>
          
          
          </div>
      
      
      </div>
      
      
      
      
      <div class="row rowtwo" >
          
          <div class="col-xs-4">
              
              <div align="center" >
                  <a href="bus.php">
                    <img src="images/bus2.png" class="imageStyle" />
                    <p class="cardMessage">Buses</p>
                  </a>
              </div>
          
          
          </div>
          
          <div class="col-xs-4">
              
              <div align="center">
                  <a href="light.php">
                    <img src="images/grid2.png" class="imageStyle" />
                    <p class="cardMessage">Smart Lights</p>
                  </a>
              </div>
          
          
          </div>
          
          <div class="col-xs-4">
              
              <div align="center">
                  <a href="developer.php">
                    <img src="images/face2.png" class="imageStyle" />
                    <p class="cardMessage">Developers</p>
                  </a>
              </div>
          
          
          </div>
      
      
      </div>
    

        
        
  </div>
    
</body>
</html>
