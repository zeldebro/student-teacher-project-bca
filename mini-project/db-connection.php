<?php
function db_conn()
{
    $servername = "localhost";
    $username = "Raghu";
    $password = "root123";
    $dbname = "college";

    $conn = mysqli_connect($servername, $username, $password, $dbname);

    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }
    else {
        echo "<span style='color: #04AA6D; text-align:center;' > Connected to DB!!!</span>";

    }
    return $conn;

}
?>