<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
session_start();

if(isset($_SESSION['user_name']) && isset($_SESSION['password'])) {
   // Check if the form has been submitted
    if(isset($_POST['adminLogin'])) {
        $ausername = $_POST['ausername'];
        $apassword = $_POST['apassword'];

        $conn = new mysqli('localhost', 'gbeauchamp1', 'gbeauchamp1', 'JobFairDB');

        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);  
            }

            $sql = "DELETE FROM adminLogin WHERE user_name = '$ausername' and password = '$apassword'";
            if ($conn->query($sql) === TRUE) {  
                header('Location: delete.php'); 
                exit();
            } 
            else {  
                echo "Error: " . $sql . "<br>" . $conn->error;  
            }  
            mysqli_close($conn);
            header('Location: delete.php'); 
            exit();
    }
    else if(isset($_POST['Company'])) {
        $cname = $_POST['cname'];
        $caddress = $_POST['caddress'];

        $conn = new mysqli('localhost', 'gbeauchamp1', 'gbeauchamp1', 'JobFairDB');

        if ($conn->connect_error) {  
            die("Connection failed: " . $conn->connect_error);  
        }

        $sql = "DELETE FROM Company 
            WHERE name = '$cname' and address = '$caddress'";
        if ($conn->query($sql) === TRUE) {  
            header('Location: delete.php'); 
            exit();
        } 
        else {  
            echo "Error: " . $sql . "<br>" . $conn->error;  
        }  
        mysqli_close($conn);
        header('Location: delete.php'); 
        exit();      
    }
    else if(isset($_POST['Contact_info'])) {
        $phoneNu = $_POST['phoneNu'];
        $cname = $_POST['cname'];

        $conn = new mysqli('localhost', 'gbeauchamp1', 'gbeauchamp1', 'JobFairDB');

        if ($conn->connect_error) {  
            die("Connection failed: " . $conn->connect_error);  
        }

        $sql = "DELETE FROM Contact_info 
            WHERE phoneNu = '$phoneNu' and cname = '$cname'";
        if ($conn->query($sql) === TRUE) {  
            header('Location: delete.php'); 
            exit();
        } 
        else {  
            echo "Error: " . $sql . "<br>" . $conn->error;  
        }  
        mysqli_close($conn);
        header('Location: delete.php'); 
        exit();      
    }
    else if(isset($_POST['FullTime'])) {
        $Fmajor = $_POST['Fmajor'];
        $title = $_POST['title'];
        $cname = $_POST['cname'];

        $conn = new mysqli('localhost', 'gbeauchamp1', 'gbeauchamp1', 'JobFairDB');

        if ($conn->connect_error) {  
            die("Connection failed: " . $conn->connect_error);  
        }

        $sql = "DELETE FROM FullTime 
            WHERE major = '$Fmajor' and title = '$title' and cname = '$cname'";
        if ($conn->query($sql) === TRUE) {  
            header('Location: delete.php'); 
            exit();
        } 
        else {  
            echo "Error: " . $sql . "<br>" . $conn->error;  
        }  
        mysqli_close($conn);
        header('Location: delete.php'); 
        exit();      
    }
    else if(isset($_POST['Internship'])) {
        $Imajor = $_POST['Imajor'];
        $title = $_POST['title'];
        $cname = $_POST['cname'];

        $conn = new mysqli('localhost', 'gbeauchamp1', 'gbeauchamp1', 'JobFairDB');

        if ($conn->connect_error) {  
            die("Connection failed: " . $conn->connect_error);  
        }

        $sql = "DELETE FROM Internship 
            WHERE major = '$Imajor' and title = '$title' and cname = '$cname'";
        if ($conn->query($sql) === TRUE) {  
            header('Location: delete.php'); 
            exit();
        } 
        else {  
            echo "Error: " . $sql . "<br>" . $conn->error;  
        }  
        mysqli_close($conn);
        header('Location: delete.php'); 
        exit();      
    }
    else if(isset($_POST['jobFair'])) {
        $date = $_POST['date'];
        $location = $_POST['location'];

        $conn = new mysqli('localhost', 'gbeauchamp1', 'gbeauchamp1', 'JobFairDB');

        if ($conn->connect_error) {  
            die("Connection failed: " . $conn->connect_error);  
        }

        $sql = "DELETE FROM jobFair 
            WHERE date = '$date' and location = '$location'";
        if ($conn->query($sql) === TRUE) {  
            header('Location: delete.php'); 
            exit();
        } 
        else {  
            echo "Error: " . $sql . "<br>" . $conn->error;  
        }  
        mysqli_close($conn);
        header('Location: delete.php'); 
        exit();      
    }
    else if(isset($_POST['jobPost'])) {
        $major = $_POST['major'];
        $title = $_POST['title'];
        $cname = $_POST['cname'];

        $conn = new mysqli('localhost', 'gbeauchamp1', 'gbeauchamp1', 'JobFairDB');

        if ($conn->connect_error) {  
            die("Connection failed: " . $conn->connect_error);  
        }

        $sql = "DELETE FROM jobPost 
            WHERE major = '$major' and title = '$title' and cname = '$cname'";
        if ($conn->query($sql) === TRUE) {  
            header('Location: delete.php'); 
            exit();
        } 
        else {  
            echo "Error: " . $sql . "<br>" . $conn->error;  
        }  
        mysqli_close($conn);
        header('Location: delete.php'); 
        exit();      
    }
    else if(isset($_POST['LoginInfo'])) {
        $email = $_POST['email'];
        $lusername = $_POST['lusername'];
        $lpassword = $_POST['lpassword'];

        $conn = new mysqli('localhost', 'gbeauchamp1', 'gbeauchamp1', 'JobFairDB');

        if ($conn->connect_error) {  
            die("Connection failed: " . $conn->connect_error);  
        }

        $sql = "DELETE FROM LoginInfo
            WHERE email = '$email' and user_name = '$lusername' and password = '$lpassword'";
        if ($conn->query($sql) === TRUE) {  
            header('Location: delete.php'); 
            exit();
        } 
        else {  
            echo "Error: " . $sql . "<br>" . $conn->error;  
        }  
        mysqli_close($conn);
        header('Location: delete.php'); 
        exit();      
    }
    else if(isset($_POST['majors'])) {
        $mname = $_POST['mname'];
        $conn = new mysqli('localhost', 'gbeauchamp1', 'gbeauchamp1', 'JobFairDB');

        if ($conn->connect_error) {  
            die("Connection failed: " . $conn->connect_error);  
        }

        $sql = "DELETE FROM majors
            WHERE name = '$mname'";
        if ($conn->query($sql) === TRUE) {  
            header('Location: delete.php'); 
            exit();
        } 
        else {  
            echo "Error: " . $sql . "<br>" . $conn->error;  
        }  
        mysqli_close($conn);
        header('Location: delete.php'); 
        exit();      
    }
    else{
        header('Location: delete.php?error=*Unable to delete to table');
        exit();
    }
}
?>