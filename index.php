<?php
session_start();

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="index.php" method="post">
        <label>username:</label><br>
        <input type="text" name="username"> <br>
        <label>password:</label> <br>
        <input type="password" name="password"> <br>
        <input type="submit" value="login" name="login"> <br>
    </form>
</body>

</html>

<?php
// the method $_SESSION is used to save data in the global data that can be recalled in different files
//when we call the session_start function in the file

//header() function is used to jump to a specific file, it can be called when we need after login
//to escape to a specific page
if (isset($_POST["login"])) {
    if (!empty($_POST["username"]) && !empty($_POST["password"])) {

        $_SESSION["username"] = $_POST["username"];
        $_SESSION["password"] = $_POST["password"];

        header("Location: home.php");

        
    }

    else echo "Username or Password missing";
}

?>