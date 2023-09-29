<!DOCTYPE html>
<html lang="en">
<head>
    <title>PHP Code</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="index.php" method="post">
        <label style= "width: 100px">Username</label>
        <input type="text" name="username"><br>
        <label style="min-width:100px">age</label>
        <input type="text" name="age"><br>
        <label style="min-width:100px">email</label>
        <input type="text" name="email"><br>
        <input type="submit" value="submit" name="submit"><br>
        
    </form>
    
</body>
</html>

<?php
    //filtering the input to prevent maliscious code from users
    if (isset($_POST["submit"])){
        $username = filter_input(INPUT_POST,"username",
        FILTER_SANITIZE_SPECIAL_CHARS);
        $age = filter_input(INPUT_POST,"age",FILTER_SANITIZE_NUMBER_INT);
        $email = filter_input(INPUT_POST,"email",FILTER_SANITIZE_EMAIL);
    }
?>