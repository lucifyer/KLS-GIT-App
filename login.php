<?php

require "init.php";

$fname = $_POST["fname"];
$lname = $_POST["lname"];
$usn = $_POST["usn"];
$branch = $_POST["branch"];
$year = $_POST["year"];
$semyear = $_POST["semyear"];
$email = $_POST["email"];
$phone = $_POST["phone"];
$grp = $branch.$year;


    $sql = "insert into gitstudents values('$fname','$lname','$usn','$branch',$year,$semyear,'$email','$phone','$grp')";
    mysqli_query($con,$sql);

mysqli_close($con);

?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">

  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>GIT App</title>
    
  <meta name="theme-color" content="#FFF" />
    
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
  
        
    
    <script>
        
        function setName()
        {
            document.getElementById("name").innerHTML = "Welcome "+getCookie("fname")+"!";
         
            
        }
        
        
        
        function avengers()
        {
            var av = new Audio('music/Avengers.mp3');
            av.loop = true;
            av.play();
            
            setName();
            
            return true;
        }
        
        
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
        
        
        
        
    
    </script>
    
    
    
</head>
    
    
    
<body style="background-color: #FFF;" onload="return avengers()">

  <header class="header">
    <h1 class="header__title" align="center" style="font-size: 32px; color: #0084ff;"> </h1>
    
  </header>

  <div class="main"> 
      
      <div class="row" style="margin-top: 40px; padding: 10px;">
          
          <div class="col-xs-12" align="center">
              
              <form action="index.php">
              
                  
                  
                    <p id="name" style="margin-top: 100px; font-size: 25px;"> </p>
                  <p style="font-size: 12px;">(Try increasing your phone's volume)</p>
                  
                  
                  

                <input type="submit" value="Let's Go!" style="margin-top: 50px; border: none; background-color: #0084ff; color: #fff; padding: 10px;" />
              
              </form>
            
          </div>
          
        
      </div>
      
      
    </div>    
    
</body>
</html>
