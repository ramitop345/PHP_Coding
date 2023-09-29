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
        <label for="">username:</label>
        <input type="text" name="username"><br>
        <label for="">password:</label>
        <input type="password" name= "password"><br>
        <input type="submit" value="Log in">
    </form>
    
</body>
</html>

<?php
    /*you cant use the get method to retrieve data from 
    the website because elements like password will be 
    displayed to any user that does the action, instead use the POST action
    */
    //echo "{$_GET["username"]}<br>";
    //echo "{$_GET["password"]}<br>";
    echo "{$_POST["username"]}<br>";
    echo "{$_POST["password"]}<br>";

    //summary
    //$_GET = Data is appended to the url
    //       NOT SECURE
    //       char limit
    //       Bookmark is possible w/ values
    //       Get requests can be catched
    //       Better for a search page

    //$_POST = Data is packaged inside the body of the html request
    //       MORE SECURE
    //       No data limit
    //       Cannot bookmark
    //       Post Request are not catched
    //       Better for submitting credentials


?>