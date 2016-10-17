
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Hello Planet!</title>
</head>


<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

$query = $_GET["planet"];
echo "Hello from " . $query;

?>

<body>

<a href="http://labwebsiteworkout.azurewebsites.net/week_4/helloworld.php"<a>Back!</a>

</body>


</html>