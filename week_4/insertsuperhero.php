<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Insert Superhero to DB</title>
</head>
<body >


</body>
</html>


<?php

$con = mysqli_connect("eu-cdbr-azure-west-a.cloudapp.net","ba5b868e496ad8","c2e15cdf","acsm_253596416cc65a9");

if (mysqli_connect_errno()){
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
}else{
    echo "working\r";
}

?>