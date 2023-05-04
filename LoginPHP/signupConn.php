<?php  
session_start();
if(isset($_SESSION['id'])){
    ini_set('display_errors', 1);
    if (isset($_POST['submit'])) {  
        extract($_POST);
        //check if passwords are the same 
        $password1 = $_POST['psw'];
        $password2 = $_POST['psw-repeat'];
        if ($password1 != $password2) {
            header('Location: Signup.php?error=*You entered two different passwords, Try Again');
            exit();
        }
        // Create connection
        $conn = new mysqli('localhost', 'gbeauchamp1', 'gbeauchamp1', 'JobFairDB');
        var_dump($conn);  
        // Check connection  
        if ($conn->connect_error) {  
            die("Connection failed: " . $conn->connect_error);  
        }  
        $sql = "INSERT INTO LoginInfo (email, user_name, password)  
            VALUES ('$email', '$user_name', '$psw')";
        if ($conn->query($sql) === TRUE) {  
            header('Location: index.php'); 
            exit();
        } else {  
            echo "Error: " . $sql . "<br>" . $conn->error;  
        }  
        $conn->close();
        header("Location: index.php");
        exit();
    }
}
?> 