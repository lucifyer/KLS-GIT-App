<?php

require "init.php";

$year = $_POST["year"];
$action = $_POST["action"];

$arr = array("CSE","ISE","ECE","EEE","ME","IPE","AE","CV","MCA","MBA","BARCH");

$flag = 0;

    
    if(strcmp($action,"1") == 0)
    {
        $sql1 = "update groups set status = 1 where year = $year";

        if(mysqli_query($con,$sql1))
        {
            echo " ";
            $flag = 1;
        }
    }
    
    else
        if(strcmp($action,"0") == 0)
        {
            $sql1 = "update groups set status = 0 where year = $year";

            if(mysqli_query($con,$sql1))
            {
                echo " ";
                $flag = 1;
            }
        }
    
    else
        if(strcmp($action,"d") == 0)
        {   
            $sql1 = "delete from groups where year = $year";

            if(mysqli_query($con,$sql1))
            {
                echo " ";
                $flag = 1;
            }
            
            
            for($i=0;$i<11;$i++)
            {
                $grp = $arr[$i].$year;
                
                $sql1 = "drop table $grp";

                if(mysqli_query($con,$sql1))
                {
                    echo " ";
                    $flag = 1;
                }
            }
            
        }
  
mysqli_close($con);

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
      
    
</head>
    
<body style="background-color: #fff;">
        
    
    <div class="container-fluid" >
            
       
            <div align="center">
            
            <form action="tpoindex.html" method="post" >
        
                <?php
                
                    if($flag == 1)
                        echo "<p style='font-size: 80px; color: #6611CC; font-weight: 300; margin-top: 200px;'>"."Action taken!"."</p>";
                    else
                        echo "<p style='font-size: 80px; color: #6611CC; font-weight: 300; margin-top: 200px;'>"."Something went wrong :("."</p>";
                ?>
                
                 <input type="submit" class="tposubmit" value="Ok" style="width: 100px; background-color: #6611CC;" />
        
                 <br>
                 <br>
                
            </form>
                
            </div>
            
        
   
    </div>
    
    
</body>
</html>