<?php
session_start();
include "logininfoConn.php";

function validate($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

if(isset($_POST['uname']) && isset($_POST['password'])){
    $uname = validate($_POST['uname']);
    $pass = validate($_POST['password']);
}

if(empty($uname)) {
    header ("location: index.php?erro=user Name is required");
    exit();
}
else if(empty($pass)) {
    header ("location: index.php?error=Password is required");
    exit();
}

$sql = "SELECT * FROM LoginInfo WHERE user_name ='$uname' AND password='$pass'";
$result = mysqli_query($conn, $sql);

if(mysqli_num_rows($result) === 1){
    $row = mysqli_fetch_assoc($result);
    if($row['user_name'] === $uname && $row['password'] === $pass) {
        echo "You have successfully logged in";
        $_SESSION['user_name'] = $row['user_name'];
        $_SESSION['name'] = $row['name'];
        $_SESSION['email'] = $row['email'];
        header("Location: home.php");
        exit();
    }
    else{
        header("Location: index.php?error=Incorrect User or Password");
        exit();
    }
}
else{
    header("Location: index.php");
    exit();
}
