<?php

// The array contains all headers, paths and scripts in the current web_page. 
//we can use it for example to access file name dynamically so that we can change 
//the original name without needing to do that in the other files where the actual file is called 
    //foreach($_SERVER as $key => $value){
      //  echo "{$key} = {$value} <br>";
    //}

    //checking post method status with §_SERVER
    // old callling: if(isset($_POST["login]))
    if ($_SERVER["REQUEST_METHOD"] == "POST"){
        echo "Hello";
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
    <input type="text" name="username">
    <input type="submit" value= "login" name="login">

    </form>
</body>
</html>