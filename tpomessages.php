<?php

require "init.php";

    $table = $_POST["grpname"];

    $sql = "select * from $table order by id desc LIMIT 50";
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
  <script src="js/bootstrap.min.js"></script>
    
  <link rel="stylesheet" type="text/css" href="styles/inline.css">

  <!-- Manifest file -->
    <link rel="manifest" href="/manifest.json">
    
  <meta name="apple-mobile-web-app-capable" content="yes">
  <meta name="apple-mobile-web-app-status-bar-style" content="black">
  <meta name="apple-mobile-web-app-title" content="GIT Placements">
  <link rel="apple-touch-icon" href="images/place152.png">
    
  <meta name="msapplication-TileImage" content="images/place144.png">
  <meta name="msapplication-TileColor" content="#2F3BA2">
    
        
    <style>
        
        *
        {
            overflow: scroll;
        }
        
        .back
        {
            width: 45px;
            padding-right: 20px;
        }
        
    </style>
    
    <script>
    
        function back()
        {
            window.location.href = 'viewmsggroups.php';
        }
        
    </script>
    
    
    
    <script>
    
        
        var id = 1;
        function shreyas(c)
        {
            
            var i=0, count=0;
            var flag = 0;
            
            for(i=1; i<=c; i++)
            {
               /* var j=0;
                var k;
                var str = document.getElementById(id).innerHTML+" ";
                //alert(str);
                
                while(j<str.length)
                {
                    if(str[j].localeCompare("h") == 0 && str[j+1].localeCompare("t") == 0 && str[j+2].localeCompare("t") == 0)
                        {
                            //alert(str[j]);
                            
                             k = j;
                            
                            //alert(j);
                            
                            while(str[k].localeCompare(" ") != 0)
                                k++;
                            
                            //alert(k);
                            
                            var sub = str.substring(j,k);
                            
                            //alert(sub);
                            
                            
                            var newlink = sub.link(sub);
                            
                            var l = newlink.length;
                            
                            str = str.replace(sub,newlink);
                            
                            document.getElementById(id).innerHTML = str;
                            
                            //alert(str);

                     
                            j = j + l;
                            
                            //alert(j);
                        }
                    
                    
                    j++;

                }*/
                
                
                var text=document.getElementById(id).innerHTML;
	           var exp = /(\b(https?|ftp|file):\/\/[-A-Z0-9+&@#\/%?=~_|!:,.;]*[-A-Z0-9+&@#\/%=~_|])/ig;
	           var text1=text.replace(exp, "<a href='$1'>$1</a>");
	           var exp2 =/(^|[^\/])(www\.[\S]+(\b|$))/gim;
	           document.getElementById(id).innerHTML=text1.replace(exp2, '$1<a target="_blank" href="http://$2">$2</a>');
                
                
                
                
                
                id++;
            }
            
        }   
    
    
    </script> 
    
</head>
    
<body style="background-color: #fafafa;">

  <header class="header" style="height: 67px; background-color: #424242; box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19); " >
    <h1 class="header__title" align="left" style="color: #fff; font-size: 22px;"><img src="images/back.png" class="back" onclick="back()" />Placements</h1>
    
  </header>

  <main class="main" >
    
      <div class="row" align="center" >
          
          <div class="col-xs-12 col-md-12" id="place">
          
            <?php
    
                $i = 1;
                while($row = mysqli_fetch_assoc($res))
                {
                    echo "<div class=\"card\" style='margin-top: 25px;'  align=\"left\" >";
            
                    echo "<p style='font-size:20px; color: #0084ff; font-weight: 300;' >".$row["title"]."</p>";
                    echo "<p style='font-size:16px; color: #424242; font-weight: 300;' >".$row["groups"]."</p>";
                    echo "<p id=\"$i\" style='font-size:14px; color: #424242; white-space:pre-line;' >".$row["msg"]."</p>";
                    echo "<br>";
                    
                    if(strcmp($row["link1"],"folder/") != 0)
                    {
                        $temp = $row["link1"];
                        echo "<img class=\"imageMsgStyle\" src=\"images/file2.png\" />"."<a style='text-decoration: none;' href=\"$temp\"><span style='font-size: 14px;'>&nbsp;&nbsp;".$temp."</span></a>";
                        echo "<br>";
                        echo "<br>";
                    }
                        
                    if(strcmp($row["link2"],"folder/") != 0)
                    {
                        echo "<img class=\"imageMsgStyle\" src=\"images/file2.png\" />"."<span style='font-size: 14px;'>&nbsp;&nbsp;Selected Students List</span>";
                        echo "<br>";
                        echo "<br>";
                    }
                        
                    if(strcmp($row["link3"],"folder/") != 0)
                    {
                        echo "<img class=\"imageMsgStyle\" src=\"images/file2.png\" />"."<span style='font-size: 14px;'>&nbsp;&nbsp;Instructions</span>";
                        echo "<br>";
                        echo "<br>";
                    }
                        
                    
                    if(strcmp($row["link4"],"folder/") != 0)
                    {
                        echo "<img class=\"imageMsgStyle\" src=\"images/file2.png\" />"."<span style='font-size: 14px;'>&nbsp;&nbsp;Instructions</span>";
                        echo "<br>";
                        echo "<br>";
                    }
                        
                    
                    if(strcmp($row["link5"],"folder/") != 0)
                    {
                        echo "<img class=\"imageMsgStyle\" src=\"images/file2.png\" />"."<span style='font-size: 14px;'>&nbsp;&nbsp;Instructions</span>";
                        echo "<br>";
                        echo "<br>";
                    }
                        
                    echo "<br>";
                    echo "<br>";
                    
                    echo "<div align='right' style='font-size: 13px;' >".$row["time"]."</div>";
                    
                    echo "</div>";
                    
                    $id = "id".(string)$i;
                    
                    
                    
                    $i++;
                }
              
              $c = mysqli_num_rows($res);
              echo "<script>"."shreyas($c)"."</script>";
                
            ?> 
              
          </div>
         
          
      
      </div>
        
      
       <br>
          <br>
  </main>
    
    
</body>
</html>
