<?php

require "init.php";

$year = $_POST["grpname"];

$arr = array("CSE","ISE","ECE","EEE","ME","IPE","AE","CE","MCA","MBA","BARCH");

$flag = 0;

for($i=0;$i<11;$i++)
{
    $grpname = $arr[$i].$year;
    
    $sql1 = "create table $grpname 

            (
                id int(10) AUTO_INCREMENT,
                cname varchar(500),
                msg varchar(5000),
                link1 varchar(500) DEFAULT 'folder/',
                link2 varchar(500) DEFAULT 'folder/',
                link3 varchar(500) DEFAULT 'folder/',
                link4 varchar(500) DEFAULT 'folder/',
                link5 varchar(500) DEFAULT 'folder/',
                time timestamp DEFAULT CURRENT_TIMESTAMP,
                
                PRIMARY KEY(id)
            
            );
        ";

    if(mysqli_query($con,$sql1))
    {
        echo " ";
    }

    
    

    $sql2 = "insert into groups values(NULL,'$grpname',$year,0)";

    if(mysqli_query($con,$sql2))
    {
        echo " ";
        $flag = 1;
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
                        echo "<p style='font-size: 80px; color: #0084ff; font-weight: 300; margin-top: 200px;'>"."Groups created!"."</p>";
                    else
                        echo "<p style='font-size: 80px; color: #0084ff; font-weight: 300; margin-top: 200px;'>"."Already created :("."</p>";
                ?>
                
                 <input type="submit" class="tposubmit" value="Ok" style="width: 130px;" />
        
                 <br>
                 <br>
                
            </form>
                
            </div>
            
        
   
    </div>
    
    
</body>
</html>