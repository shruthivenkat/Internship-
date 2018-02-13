<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body><?php
$servername = "localhost";
$username = "shruthi";
$password = "shruthiv";
$dbname = "mediatek";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql = "INSERT INTO requirement (manager,dept,jobdesc,project,duration,resources,experience)
VALUES ('$_POST[manager]','$_POST[dept]','$_POST[jobdesc]','$_POST[project]','$_POST[duration]','$_POST[resources]','$_POST[expeience]')" or die("query failed to insert");

if (mysqli_query($conn, $sql)) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . mysqli_error($conn);
}

mysqli_close($conn);
?>
    </body>
</html>
