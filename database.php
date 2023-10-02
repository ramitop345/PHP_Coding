<?php
$db_server = "localhost:3308";
$db_user  = "root";
$db_password = "admin";
$db_name = "testschema";
$conn = "";

try{
    $conn = mysqli_connect($db_server, $db_user, $db_password, $db_name);
    echo "connected successfully to database <br>";
}
catch(mysqli_sql_exception){
    echo "Connection Error <br>";
}
?>