<?php
session_start();

if(isset($_SESSION['email']) && isset($_SESSION['user_name'])){
    ?>

    <!DOCTYPE html>
    <html>
    <head>
        <title>HOME</title>
        <link rel="stylesheet" type="text/css" href="style.css">
    </head>
    <body>
        <h1>Logged in as, <?php echo $_SESSION['user_name']; ?></h1>
        <h1>HomePage</h1>
        <a href="logout.php">Logout</a>
        <a href="Company.php">Company</a>
    </body>
    </html>
    <?php
}
else{
    header("Location: index.php");
    exit();
}
?>