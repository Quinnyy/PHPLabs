<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Display Superhero</title>
</head>
<body >



<a href="set_Superhero.php"<a>Back!</a>
</body>

<?php
$forename = $_POST["forename"];
$surname = $_POST["surname"];
$power = $_POST["power"];

echo "Name: " . $forename . " " . $surname . " Super Power: " . " " . $power;

?>

</html>
