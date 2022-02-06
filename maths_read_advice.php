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
    
    $sql = "SELECT id,Advice,Likes FROM advice";
    $result = mysqli_query($con,$sql);
/*
    if ($result != NULL) {
        while($row = $result->fetch_assoc() ){
        echo " - Advice: " . $row["Advice"]. "Likes" . $row["Likes"];
        echo"<br>";
      }
    }
    */
    $con->close();
    ?>

<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, 
        initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="give_css.css"/>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css"
        integrity="sha384-5sAR7xN1Nv6T6+dT2mhtzEpVJvfS3NScPQTrOxhwjIuvcA67KV2R5Jz6kr4abQsz" crossorigin="anonymous">
<style>
.id {
  background-color: 7882A4;
  color: D1D1D1;
  height:50px;
  width:100px;
  text-align:center;
}
.adv{
    background-color: 7882A4;
    text-align:center;
    color:C3DBD9;
}
.id_2{
    background-color:C8F2EF;
    height:50px;
    width:100px;
  text-align:center;

}

    .container_t{
    box-shadow: #cd2027;
    margin-top: 150px;
    margin-left:100px;
    border-collapse: collapse;
    text-align: center;
    
}
    tr:nth-child(even) {background-color: D1D1D1;}
    tr:hover {background-color:219F94;}
</style>

    </head>
<body>

        <header id="header">
            <div class="topnav" id="myTopnav">
                <a href="#"><img class="logo" src="https://i.ibb.co/mDpmR4x/logo-icon.png" alt=""></a>
                <a id="active">Oppa</a>
                <a href="index.html">Home</a>
                <a href="give_advices.html">Give Advices</a>
                <a href="read_advices.html">Read Advices</a>
    
                <a href="javascript:void(0);" style="font-size:15px;" class="icon" onclick="NavBar()">&#9776;</a>
    
            </div>
        </header>

<div class="container_t">
<center>   
<table border="2">
        <tr>
            <th class="id">id</th>
            <th class="adv">Advice</th>
            <th class="id">Likes</th>
        </tr>
        
            <?php   // LOOP TILL END OF DATA 
                while($rows=$result->fetch_assoc())
                {
             ?>
            <tr id="data">
                <!--FETCHING DATA FROM EACH 
                    ROW OF EVERY COLUMN-->
                <td class="id_2"><?php echo $rows['id'];?></td>
                <td><?php echo $rows['Advice'];?></td>
                <td class="id_2"><?php echo $rows['Likes'];?></td>

            </tr>
            <?php
                }
             ?>
        
    </table>
    </center>
</div>
</body>


</html