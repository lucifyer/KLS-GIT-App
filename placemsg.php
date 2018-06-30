<?php
    require "init.php";

    $title = $_POST["title"];

    $arr = $_POST["grps"];

    $n = count($arr);
    
    $msg = $_POST["msg"];

    $links = array();

    $flag = 0;

    $file = "file";
    
    $url = "folder/";


    for($i=0;$i<5;$i++)
    {
        
  
    $tfile = $_FILES[$file.(string)$i]['name'];
            $temp_name = $_FILES[$file.(string)$i]["tmp_name"];
            $target_path = "folder/".$tfile;
        
            if(move_uploaded_file($temp_name,$target_path))
            {
                $flag = $flag + 1;   
            }
        
        $link[$i] = $url.$tfile; 
      }



for($i=0;$i<$n;$i++)
{
    $table = $arr[$i];
    
    $sql = "insert into $table values(NULL,'$title','$msg','$link[0]','$link[1]','$link[2]','$link[3]','$link[4]',NULL);";
    
    if(mysqli_query($con,$sql))
        echo " ";

    else
        echo "fail".mysqli_error($con);
  
}



$str = implode(",",$arr);

    $sqltpo = "insert into tpo values(NULL,'$title','$str','$msg',NULL,'$link[0]','$link[1]','$link[2]','$link[3]','$link[4]')";

    mysqli_query($con,$sqltpo);



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
    
    
    
    <style>
        
        *
        {
            overflow: scroll;
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
        
    
    <div class="container-fluid" >
            
       
            <div align="center">
            
            <form action="https://onesignal.com/apps/21ffd18d-e785-4202-a7c5-2e26c404e604/notifications/new" target="_blank" >
        
                <p style="font-size: 45px; color: #0084ff; font-weight: 300; margin-top: 150px;"><img src="images/back2.png" class="back" onclick="back()" />Send Notification</p>
                    
            
                 <input type="submit" class="tposubmit" value="Click here" style="width: 100px;" />
        
                 <br>
                 <br>
                
            </form>
                
            </div>
            
        
   
    </div>
    
    
</body>
</html>
