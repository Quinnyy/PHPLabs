<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Insert Battle</title>
</head>
<body>
<form action="insertbattle.php" method="post">
    <label>Villain Fought:</label><input type="text" name="villain">
    <input type="submit" value="Submit">
</form>


<a href="managebattles.html"<a>Back!</a>


</body>
</html>

<?php

$conn = mysqli_connect("eu-cdbr-azure-west-a.cloudapp.net","ba5b868e496ad8","c2e15cdf","acsm_253596416cc65a9");

$sql = "SELECT firstName FROM superheros";
$result = $conn->query($sql);

echo "<select name='firstName'>";
while ($row = $result->fetch_assoc())
{
    echo "<option value='" . $row['firstName'] . "'>'" . $row['firstName'] . "</option>";
}
echo "</select>";

?>


