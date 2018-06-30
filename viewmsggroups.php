<?php

require "init.php";

$sql = "select * from groups where status = 0";

$res = mysqli_query($con,$sql);

?>



<!DOCTYPE html>
<html lang="en">
<head>
  <title>Placement Cell</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="styles/tpo.css">
      
  <!--script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script-->
  <!--script src="js/bootstrap.min.js"></script-->
     
    <style>
        
        input:focus
        {
            outline: none;
        }
        
        .back
        {
            width: 65px;
            padding-right: 20px;
        }
    
    </style>
    
    
    
    <script>
    
        function back()
        {
            window.location.href = 'tpoindex.html';
        }
        
    </script>
    
    
    
</head>
    
<body style="background-color: #fff;">
        
    
    <div class="container-fluid">
            
        <div class="jumbotron" style="background-color: #db3236;">
            <h1 style="color: #FFF; font-weight: 200;"><img src="images/back.png" class="back" onclick="back()" />Messages</h1>
        </div>
   
        <!--form action="newgroup.php" method="post" -->
            
            <div class="container boxviewgrps" align="left">
                
                <div align="center"><img src="images/group4.png" /></div>
                <br>
                
                
                <form action="tpomessages.php" method="post" >    
                        
                                    <img src='images/group4.png' class="listimg" />
                                    <input type="hidden" value="tpo" name="grpname" />
                                    <input type="submit" value="TPO" class="grplist" /> 
                </form>
                
                <br>
                
                <label style="font-size: 20px; margin-left: 50px; margin-top: 20px;">OR</label>
                
            
                <form action="seegroups.php" method="post">
                    
                    <label style="margin-top: 40px; font-size: 25px; font-weight: 300;">Enter year</label>
                    <br>
                    <br>
                    
                    <input type="number" name="year" style="padding: 5px; font-size: 17px;" />
                    <br>
                    <br>
                    <br>
                    
                    <input type="submit" value="See groups" style="padding: 10px; background-color: #db3236; color: #fff; border: none;" />
                    <br>
                    <br>
                
                
                
                </form>
                
            
            
            </div>
        
        <!--div class="container emptybox" align="right"> <input type="submit" class="tposubmitviewgrps" value="Let's Go!" /></div>
            
        </form-->
   
    </div>
    
    
</body>
</html>