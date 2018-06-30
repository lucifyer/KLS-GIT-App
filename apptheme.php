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
  
        
    
    <style>
            
        .imgstyle
        {
           width: 107%;
        }
        
        
        
        .textstyle
        {
            margin-top: 5px;
            font-size: 12px;
            
        }
        
        
        
    
    </style>
    
    
    
    <script>
        
        
        function setCookie(cname, cvalue, exdays) 
        {
            var d = new Date();
            d.setTime(d.getTime() + (exdays*24*60*60*1000));
            
            var expires = "expires="+ d.toUTCString();
            
            document.cookie = cname + "=" + cvalue + ";" + expires + ";path=/";
        }
        
        
        
        
    
        function setAppTheme(theme)
        {
            if(theme != ' ')
            {
                //alert(theme);
            
                setCookie("background",theme,800);
            
                
                    setCookie("font","#ffffff",800);
                
                  
                
                window.location.href = 'index.php';
            }
            
            else
            {
                //alert(theme);
            
                setCookie("background",theme,800);
            
                setCookie("font","#424242",800); 
                
                window.location.href = 'index.php';
            }
            
            
        }
        
    
    
    </script>
    
        
    
    
</head>
    
    
    
<body style="background-color: #FFF;">

  <header class="header">
    <h1 class="header__title" align="left" style="font-size: 26px; color: #0084ff;"><span id="hello">Choose a theme</span></h1>
 
  </header>

  <div class="main" style="background-color: #fff;"> 
      
      <div class="row" style="margin-top: 40px;">
          
          <div class="col-xs-6">
              
              
                <img src= "images/bg5.png" class="imgstyle" onclick="setAppTheme('bg5.png')"/>
                <div  align="center" class="textstyle">Theme 1</div>
              
              
          </div>
          
          
           <div class="col-xs-6">
              
              
                <img src= "images/bg6.png" class="imgstyle" onclick="setAppTheme('bg6.png')" />
               <div  align="center" class="textstyle">Theme 2</div>
              
              
          </div>
          
        
      </div>
      
      
      
      
      <div class="row" style="margin-top: 20px;">
          
          <div class="col-xs-6">
              
              
                <img src= "images/bg7.png" class="imgstyle" onclick="setAppTheme('bg7.png')" />
              <div  align="center" class="textstyle">Theme 3</div>
              
              
          </div>
          
          
          <div class="col-xs-6">
              
              
                <img src="images/theme4.png" class="imgstyle" onclick="setAppTheme('theme4.png')" />
              <div  align="center" class="textstyle">Theme 4</div>
              
              
          </div>
          
          
           
          
        
      </div>
      
      
      
      
      <div class="row" style="margin-top: 20px;">
          
          
          
          <div class="col-xs-6">
              
              
                <img src= "images/greymatter.png" class="imgstyle" onclick="setAppTheme(' ')" />
               <div  align="center" class="textstyle">Grey Matter</div>
              
              
          </div>
          
          
          <div class="col-xs-6">
              
              
                <img src= "images/lilac.png" class="imgstyle" onclick="setAppTheme('lilac.png')" />
               <div  align="center" class="textstyle">Lilac</div>
              
              
          </div>
          
    
          
        
      </div>
      
      
      
      
      
      
      <div class="row" style="margin-top: 20px;">
          
          
          
          <div class="col-xs-6">
              
              
                <img src= "images/deepblue.png" class="imgstyle" onclick="setAppTheme('deepblue.png')" />
               <div  align="center" class="textstyle">Pacific</div>
              
              
          </div>
          
          
          <div class="col-xs-6">
              
              
                <img src= "images/royal.png" class="imgstyle" onclick="setAppTheme('royal.png')" />
               <div  align="center" class="textstyle">Sun Bath</div>
              
              
          </div>
          
    
          
        
      </div>
      
      
      
      
      
      
      <div class="row" style="margin-top: 20px;">
          
          
          
          <div class="col-xs-6">
              
              
                <img src= "images/sensation.png" class="imgstyle" onclick="setAppTheme('sensation.png')" />
               <div  align="center" class="textstyle">Sensation</div>
              
              
          </div>
          
          
          
          
          <div class="col-xs-6">
              
              
                <img src= "images/mint.png" class="imgstyle" onclick="setAppTheme('mint.png')" />
               <div  align="center" class="textstyle">Mint</div>
              
              
          </div>
          
        
    
          
        
      </div>
      
      
      
      <br>
      <br>
      
      <div align="center"><p style="font-size: 9px;" >New, clear and improved app themes will be coming soon!</p></div>
      
      
      
      
      
      
      
      
    </div>
    
    
    
    <script>
        
        
        
        
        
    
        /*function saveDetails()
        {
            
            
            var fname = document.getElementById("fname").value;
            var branch = document.getElementById("branch").value;
            var year = document.getElementById("year").value;
            
            
            setCookie("fname",fname,800);
            setCookie("branch",branch,800);
            setCookie("year",year,800);
            
            var grp = branch+year;
            
            setCookie("group",grp,800);
            
            setCookie("background","bg",800);
            
            
            
            
            return true;
        }*/
            
        
    </script>
    
    
    
</body>
</html>
