<?php

require "init.php";

$grpname = $_POST["grpname"];

$sql = "select * from gitstudents where grp like '$grpname' order by fname ";

$res = mysqli_query($con,$sql);

?>


<!DOCTYPE html>
<html lang="en">
<html>
<head>
<title>CC</title>
    
    
    <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <!--script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script-->
  <script src="js/bootstrap.min.js"></script>
    
    
    <style>
    
        table {
            border-collapse: collapse;
            text-decoration: none;
        }

        table, th, td {
        border: 2px solid #0084ff;
        }
        
        td{
            font-size: 18px;
            height: 25px;
        }
        
        th
        {
           padding-left: 10px;
            color: #fff;
            background-color: #0084ff;
            font-size: 20px;
            font-weight: 200; 
        }
        
        .jumbotron{
            
            margin-bottom: 0px;
            padding-left: 8px;
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
            window.history.back();
        }
        
    </script>
    
    
    
    
</head>

<body>
    
    <div class="container-fluid">
        
        <div class="jumbotron" align="left" style="background-color: #0084ff;"><h1 style="color: #FFF; font-weight: 200;"><img src="images/back.png" class="back" onclick="back()" />Group Members</h1></div>
        
        
    <br>
        

<table  border="1" cellpadding="15" width="100%" >
    

<?php

    $numrows = mysqli_num_rows($res);
    
    if($numrows == 0)
    {
        echo "<p align=\"center\" style='margin-top: 200px; font-size: 60px; color: #0084ff; font-weight: 200;'>"."Nothing to show!"."</p>";
    }
    
    else
    {
        
        echo "<p align=\"left\" style='margin-top: 5px; font-size: 20px; color: #424242; font-weight: 200;'>"."Total: <b>".$numrows."</b></p>";
        
        echo "<tr>";
           echo "<th height=\"40\" >"."Name"."</th>";
           //echo "<th height=\"40\" >"."Last Name"."</th>";
         echo "<th height=\"40\" >"."Phone"."</th>";
           echo "<th height=\"40\" >"."USN"."</th>";
           echo "<th height=\"40\" >"."Branch"."</th>";
           echo "<th height=\"40\" >"."Year of passing"."</th>";
           echo "<th height=\"40\" >"."Email"."</th>";
          
        
            echo "</tr>";
        
    
        while($cc=mysqli_fetch_assoc($res))
        {
    
           
            
            
            echo "<tr>";
	
	       echo"<td style='padding: 5px; background-color: #fff;' >".$cc['fname']." ".$cc["lname"]."</td>";
	       //echo"<td style='padding: 5px; background-color: #fff;'>".$cc['lname']."</td>";
            echo"<td align=\"left\" style='height: 30px background-color: #fff; padding: 7px;'>".$cc['phone']."</td>";
           echo"<td style='padding: 5px; background-color: #fff;'>".$cc['usn']."</td>";
           echo"<td align=\"left\" style='height: 30px; background-color: #fff; padding: 5px;' >".$cc['branch']."</td>";
	       echo"<td align=\"left\" style='height: 30px background-color: #fff; padding: 5px;'>".$cc['year']."</td>";
	       echo"<td align=\"left\" style='height: 30px background-color: #fff; padding: 5px;'>".$cc['email']."</td>";
	       
    
            
        }
    }   


?>


</table>
        
        
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            
</div>
    
    
    <script type="text/javascript">
        
    var sec = 60;
    var min = 10;
    var Timer = setInterval(function(){
        
    sec--;
        
        if(min==0 && sec==1)
        {
            min = 10;
            sec = 60;
            <?php $_SESSION["assign"] = $id;  ?> 
                
        }
            
        
    if(sec <= 0)
        {
            
            sec = 60;
            min--;
            
        
        }
        
    },1000);
        
        
        
</script>

    
    
    
</body>
</html>