<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Insert Battle to DB</title>
</head>
<body >
<a href="managebattles.html"<a>Back!</a>

</body>
</html>

<?php


$conn = mysqli_connect("eu-cdbr-azure-west-a.cloudapp.net","ba5b868e496ad8","c2e15cdf","acsm_253596416cc65a9");

if (mysqli_connect_errno()){
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
}else{
    echo "working\r";
}

$villain = $_POST["villain"];
$superhero = $_POST["firstName"];

$heroID = "SELECT superheroID FROM superheros WHERE firstName = '$superhero'";

$result =mysql_fetch_array($heroID);


echo $conn->query($heroID);

$sql = "INSERT INTO battles (superheroID, villanFought) VALUES ($result', '$villain')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
}
else {
    echo "not working...";
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();

?>