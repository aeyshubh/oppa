<?php
    
    $localhost="127.0.0.1";
    $user="root";
    $pass='';
    $database="advices";
   
    $con=mysqli_connect($localhost,$user,$pass,$database);
    if(!$con)
    {
        die("Connection Failed :".mysqli_connect_error());
    }
    $Advice = mysqli_real_escape_string($con, $_POST['Advice']);
    
    $sql = "INSERT INTO advice(Advice,Likes) VALUES('$Advice',4)";
    $result = mysqli_query($con,$sql);
    
    $con->close();
    ?>