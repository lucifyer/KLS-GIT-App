<?php

require "init.php";

$year = $_POST["year"];

$sql = "select * from groups where year = $year and status = 0";

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
  <script src="js/bootstrap.min.js"></script>
    
    
    <style>
        
        .back
        {
            width: 65px;
            padding-right: 20px;
        }
        
    </style>
    
    <script>
    
        function back()
        {
            window.history.back();
        }
        
    </script>
      
    
</head>
    
<body style="background-color: #fff;">
        
    
    <div class="container-fluid">
            
        <div class="jumbotron" style="background-color: #43BFC7;">
            <h1 style="color: #FFF; font-weight: 200;"><img src="images/back.png" class="back" onclick="back()" />Groups</h1>
        </div>
   
        <!--form action="newgroup.php" method="post" -->
            
            <div class="container boxviewgrps" align="left">
                
                <div align="center"><img src="images/group2.png" /></div>
                <br>
            
                <?php
                
                    while($row = mysqli_fetch_assoc($res))
                    {
                        $temp = $row["name"];
                        
                        echo "<form action=\"viewmembers.php\" method=\"post\" >    
                        
                                    <img src='images/group2.png' class=\"listimg\" />
                                    <input type=\"hidden\" value=\"$temp\" name=\"grpname\" />
                                    <input type=\"submit\" value=\"$temp\" class=\"grplist\" /> </form> ";
                        
                        echo "<br>";
                        
                    }
    
                
                ?>
                
            
            
            </div>
        
        <!--div class="container emptybox" align="right"> <input type="submit" class="tposubmitviewgrps" value="Let's Go!" /></div>
            
        </form-->
   
    </div>
    
    
</body>
</html>