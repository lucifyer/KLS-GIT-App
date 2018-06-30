<?php

require "init.php";

$sql = "select * from groups where status = 0 ";

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
    
  <!--link rel="stylesheet" href="style/inline.css"-->    
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  
    <style>
    
        .mybtn
        {
            border: none;
            background-color: #3cba54;
            padding: 10px;
            color: #fff;
            width: 80px;
            border-radius: 5%;
        }
        
        .mybtn:focus
        {
            outline: none;
            
        }
        
        textarea:focus
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
    
        $('textarea').keypress(function(event) {
            
            if(event.which == 13)
            {
                event.preventDefault();
                
                var s = $(this).val();
                
                $(this).val(s+"\n");
            }
        });
    
    </script>
    
    <script>
    
        function back()
        {
            window.location.href = 'tpoindex.html';
        }
        
    </script>
    
</head>
    
<body style="background-color: #fff;">
        
    <div class="container-fluid ">
    <div class="row">
        <div class="col-xs-12 col-sm-12">
            
            <div class="jumbotron" align="left" style="background-color: #3cba54;"><h1 style="color: #FFF; font-weight: 200;"><img src="images/back.png" class="back" onclick="back()" />Send a Message</h1></div>
        </div>
    </div>
</div>
    
 
    
    <div class="container msgbox" style="margin-top: 2px;" align="center" >
        
        <div class="row">
        
            <div class="col-xs-10 col-sm-12 col-md-12">
                
                <form action="placemsg.php" method="post" name="formid" id="formid" enctype="multipart/form-data">
                
                    <div class="form-group" align="left">
                        
                        
                        <lable  class="msglable">Title</lable>
                        <br>
                        <br>
                        
                        <input type="text"  name="title" id="title" required autocomplete="off" placeholder="Name" class="form-control tpotext"/>
                        <br>
                        <br>
                        <br>
                        
                        
                        <lable  class="msglable">Groups</lable>
                        <br>
                        <br>
            
                        <button type="button" class="mybtn" data-toggle="collapse" data-target="#demo" id="col" onclick="show()">Select</button> 
                        <br>
                        <br>
                        
                    <div class="row" style="padding: 5px;" id="demo">        
                        <?php
                            
                            if(mysqli_num_rows($res) == 0)
                            {
                                echo"No groups available";
                            }
                                
                            $count = 1;
                            $yc = 0;
                            $i = 0;
                            while($row = mysqli_fetch_assoc($res))
                            {
                                $temp = $row["name"];
                                                                
                                if( ($row["year"] > 2019) && ($yc == 0))
                                {
                                    $yc = 1;
                                    $count = 1;
                                    echo"<br>";
                                    echo"<br>";
                                    echo"<br>";
                                    echo"<br>";
                                }
                                
                                echo "<div class=\"col-xs-4 col-md-4\"><input type='checkbox' name='grps[]' value=\"$temp\" />"." ".$temp."</div>";
                                
                                $count++;
                                
                                if($count > 3)
                                {
                                    
                                    $count = 1;
                                    echo"<br>";
                                    echo"<br>";
                                }
                                    
                                    
                            }
                        
                        ?>
                        </div>
                    
                        <br>
                        <br>
                        
                      
                        <lable class="msglable">Your Message</lable>
                        <br>
                        <br>
                        
                        
                       <textarea style="height: 220px; font-size: 18px; font-weight: 300;" class="form-control mytextarea" name="msg" id="msg" autocomplete="off" placeholder="Message......"  required></textarea>
                        
                        <br>
                        <br>
                        
                         
                        
                    
                        <p >
                            <label style="color:#3cba54; font-size:15px; font-weight: 400;">Attach File </label>
                            <input type="file" name="file0" accept="file_extension"/>
                        </p>
                        <br>
                        
                        <p >
                            <label style="color:#3cba54; font-size:15px; font-weight: 400;">Attach File </label>
                            <input type="file" name="file1" accept="file_extension"/>
                        </p>
                        <br>
                        
                        <p >
                            <label style="color:#3cba54; font-size:15px; font-weight: 400;">Attach File </label>
                            <input type="file" name="file2" accept="file_extension"/>
                        </p>
                        <br>
                        
                        <p>
                            <label style="color:#3cba54; font-size:15px; font-weight: 400;">Attach File </label>
                            <input type="file" name="file3" accept="file_extension"/>
                        </p>
                        <br>
                        
                        <p>
                            <label style="color:#3cba54; font-size:15px; font-weight: 400;">Attach File </label>
                            <input type="file" name="file4" accept="file_extension"/>
                        </p>
                        <br>
                    
                        
                        </div>
                        
                        
                        
                        
                        <br>
                        
                        
                    
                       
                        <div align="right"><input type="submit" value="Send" class="msgsubmit"  onclick="return aposfunction()"/></div>
                        
                        <br>
                        
                      
                       
                        
                        <footer align="center">
                            
                            <p>Made with <img src="hearth.png" style="width:20px;"> in GIT</p>
                            
                        </footer>
                
                
                </form>
            
            </div>
        </div>
        
    </div>
    
    
    
    
    
<script>
        
    function aposfunction() 
    {
        var str = document.getElementById("msg").value; 
        
        str = str.replace(/'/g , "&apos;");
        
        document.getElementById("msg").value = str;
        
        
        var str2 = document.getElementById("title").value; 
        
        str2 = str2.replace(/'/g , "&apos;");
        
        document.getElementById("title").value = str2;
        
        
        var str3 = document.getElementById("msg").value; 
        
        st3 = str3.replace("\n","<br>");
        
        document.getElementById("msg").value = str3;
        
        
        
        return true;
    }
    
</script>
    
    <script>
        
        var count = 2;
        
        function show()
        {
            if(count%2 == 0)
            {
                    var c = document.getElementById('demo');
                        c.style.display = "block"; 
                count++;
            }
            
            else
            {
                var c = document.getElementById('demo');
                        c.style.display = "none"; 
                count++;
                
            }
              
        }
    
        var c = document.getElementById('demo');
        c.style.display = "none";
        
        
    </script>
    

    
</body>
</html>