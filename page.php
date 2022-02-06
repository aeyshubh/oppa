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
    $sql = "SELECT id, Advice,Likes FROM advice";
    $result = mysqli_query($con,$sql);
    
    if ($result != NULL) {
        while($row = $result->fetch_assoc() ){
        echo "id: " . $row["id"]. " - Advice: " . $row["Advice"]. "Likes" . $row["Likes"];
        echo"<br>";
      }
    }
    

    $con->close();
    ?>