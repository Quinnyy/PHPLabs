<?php

$con = mysqli_connect("eu-cdbr-azure-west-a.cloudapp.net","ba5b868e496ad8","c2e15cdf","acsm_253596416cc65a9");

if (mysqli_connect_errno()){
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
}else{
    echo "working\r";
}

$sql = "SELECT title, productionStudio FROM marvelmovies ";
$result = $con->query($sql);

if ($result->num_rows > 0) {

    while($row = $result->fetch_assoc()) {
        echo "title: " . $row["title"]. "\r" . "studio: " . $row["productionStudio"]. ",";
        echo "</br>";
    }

} else {
    echo "0 results";
}
$con->close();
?>