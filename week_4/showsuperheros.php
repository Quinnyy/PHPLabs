<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Show Superheros</title>
</head>
<body >
<h2>All Superheros</h2>

<a href="manageSuperheros.html"<a>Back!</a>
</body>
</html>

<?php
$con = mysqli_connect("eu-cdbr-azure-west-a.cloudapp.net","ba5b868e496ad8","c2e15cdf","acsm_253596416cc65a9");

if (mysqli_connect_errno()){
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
}else{
    echo "working!</br>";
}

$sql = "SELECT * FROM superheros ";
$result = $con->query($sql);

if ($result->num_rows > 0) {

    while($row = $result->fetch_assoc()) {
        echo "Index : " . $row["superheroID"];
        echo "</br>";
        echo  "First Name: " . $row["firstName"];
        echo "</br>";
        echo "Last Name: " . $row["lastName"];
        echo "</br>";
        echo "Super Power: " . $row["mainSuperpower"];
        echo "</br>";
    }

} else {
    echo "0 results";
}
$con->close();

?>