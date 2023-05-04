<?php
session_start();
include "adminLoginConn.php";

function validate($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

if(isset($_POST['uname'], $_POST['password'])){
    $uname = validate($_POST['uname']);
    $pass = validate($_POST['password']);
} else {
    header("Location: adminIndex.php?error=Invalid input");
    exit();
}

$conn = mysqli_connect('localhost', 'gbeauchamp1', 'gbeauchamp1', 'JobFairDB');
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql = "SELECT * FROM adminLogin WHERE user_name = ? AND password = ?";
$stmt = mysqli_prepare($conn, $sql);
mysqli_stmt_bind_param($stmt, "ss", $uname, $pass);
mysqli_stmt_execute($stmt);
$result = mysqli_stmt_get_result($stmt);

if(mysqli_num_rows($result) === 1){
    $row = mysqli_fetch_assoc($result);
    if($row['user_name'] === $uname && $row['password'] === $pass) {
        $_SESSION['user_name'] = $row['user_name'];
        $_SESSION['password'] = $row['password'];
        header("Location: adminHome.php");
        exit();
    }
    else{
        header("Location: adminIndex.php?error=Incorrect User or Password");
        exit();
    }
}
else{
    header("Location: adminIndex.php?error=Incorrect User or Password");
    exit();
}

mysqli_stmt_close($stmt);
mysqli_close($conn);
?>
