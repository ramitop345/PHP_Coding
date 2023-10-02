<?php
include("database.php");
//hashing sensitive data to numbers, letters and symbols to hide or protect original input from third parties
if(isset($_POST["login"])){
    $hash = password_hash($_POST["password"], PASSWORD_DEFAULT);
    $username = $_POST["username"];

    $sql = "SELECT * FROM users";
    $result = mysqli_query($conn, $sql);

    if(mysqli_num_rows($result)>0){
        while($row = mysqli_fetch_assoc($result)){
            echo $row["id"] . "<br>";
            echo $row["user"] . "<br>";
            echo $row["password"] . "<br>";
        }
    }

    else echo "No User Found";

    mysqli_close($conn);


}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!--<form action="<?php $_SERVER["PHP_SELF"] ?>" method="post">-->
    <!-- The htmlspecialchars() helps encode special characters for html -->
    <form action="<?php htmlspecialchars($_SERVER["PHP_SELF"]) ?>" method="post">
    <label for="">username: </label> <br>
    <input type="text" name="username"><br>
    <label for="">password: </label> <br>
    <input type="password" name="password"> <br>
    <input type="submit" value= "login" name="login"><br>

    </form>
</body>
</html>