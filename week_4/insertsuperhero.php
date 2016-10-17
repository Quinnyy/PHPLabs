<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Insert Superhero to DB</title>
</head>
<body >


</body>
</html>


<?php
$forename = $_POST["forename"];
$surname = $_POST["surname"];
$power = $_POST["power"];

$conn = mysqli_connect("eu-cdbr-azure-west-a.cloudapp.net","ba5b868e496ad8","c2e15cdf","acsm_253596416cc65a9");

if (mysqli_connect_errno()){
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
}else{
    echo "working\r";

    $sql = "INSERT INTO superheros (firstName, lastName, mainSuperpower) VALUES ($forename, $surname, $power)";
    $result = $con->query($sql);

    if ($conn->query($sql) === TRUE) {
           echo "New record created successfully";
        }
 else {
           echo "Error: " . $sql . "<br>" . $conn->error;
}

}

$conn->close();

?>