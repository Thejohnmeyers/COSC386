<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
session_start();

if(isset($_SESSION['user_name']) && isset($_SESSION['password']) ){
    ?>

    <!DOCTYPE html>
    <html>
    <head>
        <title>admin add page</title>
        <link rel="stylesheet" type="text/css" href="style.css">
    </head>
    <body>
        <h1>HomePage</h1>
        </main>
        <a href="adminHome.php">Back</a>
        <a href="index.php">user login</a>
        <a href="delete.php">delete</a>
        <a href="edit.php">edit</a>
        <a href="add.php">add</a>
        <a href="adminHome.php">show table</a>

    </body>
    </html>
    <?php
}
else{
    header("Location: AdminIndex.php");
    exit();
}
?>