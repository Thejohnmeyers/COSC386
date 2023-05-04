<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
session_start();

if(isset($_SESSION['user_name']) && isset($_SESSION['password'])) {
    ?>
    <!DOCTYPE html>
    <html>
    <head>
        <title>admin add page</title>
        <link rel="stylesheet" type="text/css" href="style.css">
    </head>
    <body>
        <?php
   // Check if the form has been submitted
    if(isset($_POST['adminLogin'])) {
        $ausername = $_POST['ausername'];
        $apassword = $_POST['apassword'];
        $eusername = $_POST['eusername'];
        $epassword = $_POST['epassword'];


        $conn = new mysqli('localhost', 'gbeauchamp1', 'gbeauchamp1', 'JobFairDB');

        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);  
            }

            $sql = "UPDATE adminLogin
                    SET user_name = '$eusername', password= '$epassword'
                    WHERE user_name = '$ausername' and password = '$apassword'";
            if ($conn->query($sql) === TRUE) { 
                 
                header('Location: edit.php'); 
                exit();
            } 
            else {  
                echo "Error: " . $sql . "<br>" . $conn->error;  
            }  
            mysqli_close($conn);
            header('Location: edit.php'); 
            exit();
    }

    else if(isset($_POST['Company'])) {
        $cname = $_POST['cname'];
        $caddress = $_POST['caddress'];
        $ename = $_POST['ename'];
        $eaddress = $_POST['eaddress'];

        $conn = new mysqli('localhost', 'gbeauchamp1', 'gbeauchamp1', 'JobFairDB');

        if ($conn->connect_error) {  
            die("Connection failed: " . $conn->connect_error);  
        }

        $sql = "UPDATE Company
                SET name = '$ename', address= '$eaddress'
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
        $ephoneNu = $_POST['ephoneNu'];
        $eemail = $_POST['eemail'];
        $esocMedia = $_POST['esocMedia'];
        $ewebsite = $_POST['ewebsite'];
        $ecname = $_POST['ecname'];

        $conn = new mysqli('localhost', 'gbeauchamp1', 'gbeauchamp1', 'JobFairDB');

        if ($conn->connect_error) {  
            die("Connection failed: " . $conn->connect_error);  
        }

        $sql = "UPDATE Contact_info
                SET phoneNu = '$ephoneNu', email= '$eemail', socMedia = '$esocMedia', website = '$ewebsite', cname ='$ecname' 
                WHERE phoneNu = '$phoneNu' and cname = '$cname'";
        if ($conn->query($sql) === TRUE) {  
            header('Location: edit.php'); 
            exit();
        } 
        else {  
            echo "Error: " . $sql . "<br>" . $conn->error;  
        }  
        mysqli_close($conn);
        header('Location: edit.php'); 
        exit();      
    }
    else if(isset($_POST['FullTime'])) {
        $Fmajor = $_POST['Fmajor'];
        $title = $_POST['title'];
        $cname = $_POST['cname'];
        $emajor = $_POST['emajor'];
        $erequirements = $_POST['erequirements'];
        $ejobID = $_POST['ejobID'];
        $ejobMode = $_POST['ejobMode'];
        $etitle = $_POST['etitle'];
        $esalary = $_POST['esalary'];
        $ehours = $_POST['ehours'];
        $ecname = $_POST['ecname'];
        $ecaddress = $_POST['ecaddress'];
        $ebenefits = $_POST['ebenefits'];

        $conn = new mysqli('localhost', 'gbeauchamp1', 'gbeauchamp1', 'JobFairDB');

        if ($conn->connect_error) {  
            die("Connection failed: " . $conn->connect_error);  
        }

        $sql = "UPDATE FullTime 
        SET major = '$emajor', requirements = '$erequirements', jobID = '$ejobID', jobMode = '$ejobMode', title = '$etitle', salary = '$esalary', hours = '$ehours', cname ='$ecname', caddreess = '$ecaddress', benefits  = '$ebenefits' 
        WHERE FullTime.major = '$Fmajor' and FullTime.title = '$title' and FullTime.cname = '$cname'";
   

        if ($conn->query($sql) === TRUE) {  
            header('Location: edit.php'); 
            exit();
        } 
        else {  
            echo "Error: " . $sql . "<br>" . $conn->error;  
        }  
        mysqli_close($conn);
        header('Location: edit.php'); 
        exit();      
    }
    else if(isset($_POST['Internship'])) {
        $Imajor = $_POST['Imajor'];
        $title = $_POST['title'];
        $cname = $_POST['cname'];
        $emajor = $_POST['emajor'];
        $erequirements = $_POST['erequirements'];
        $ejobID = $_POST['ejobID'];
        $ejobMode = $_POST['ejobMode'];
        $etitle = $_POST['etitle'];
        $esalary = $_POST['esalary'];
        $ehours = $_POST['ehours'];
        $ecname = $_POST['ecname'];
        $ecaddress = $_POST['ecaddress'];
        $etimeFrame = $_POST['etimeFrame'];

        $conn = new mysqli('localhost', 'gbeauchamp1', 'gbeauchamp1', 'JobFairDB');

        if ($conn->connect_error) {  
            die("Connection failed: " . $conn->connect_error);  
        }

        $sql = "UPDATE Internship 
        SET major = '$emajor', requirements = '$erequirements', jobID = '$ejobID', jobMode = '$ejobMode', title = '$etitle', salary = '$esalary', hours = '$ehours', cname ='$ecname', caddreess = '$ecaddress', timeFrame  = '$etimeFrame' 
        WHERE Internship.major = '$Imajor' and Internship.title = '$title' and Internship.cname = '$cname'";
   

        if ($conn->query($sql) === TRUE) {  
            header('Location: edit.php'); 
            exit();
        } 
        else {  
            echo "Error: " . $sql . "<br>" . $conn->error;  
        }  
        mysqli_close($conn);
        header('Location: edit.php'); 
        exit();      
    }
    else if(isset($_POST['jobFair'])) {
        $date = $_POST['date'];
        $location = $_POST['location'];
        $edate = $_POST['edate'];
        $elocation = $_POST['elocation'];

        $conn = new mysqli('localhost', 'gbeauchamp1', 'gbeauchamp1', 'JobFairDB');

        if ($conn->connect_error) {  
            die("Connection failed: " . $conn->connect_error);  
        }

        $sql = "UPDATE jobFair
                SET date = '$edate', location= '$elocation'
                WHERE location = '$date' and location = '$location'";
        if ($conn->query($sql) === TRUE) {  
            header('Location: edit.php'); 
            exit();
        } 
        else {  
            echo "Error: " . $sql . "<br>" . $conn->error;  
        }  
        mysqli_close($conn);
        header('Location: edit.php'); 
        exit();      
    }
    else if(isset($_POST['jobPost'])) {
        $major = $_POST['major'];
        $title = $_POST['title'];
        $cname = $_POST['cname'];
        $emajor = $_POST['emajor'];
        $erequirements = $_POST['erequirements'];
        $ejobID = $_POST['ejobID'];
        $ejobMode = $_POST['ejobMode'];
        $etitle = $_POST['etitle'];
        $esalary = $_POST['esalary'];
        $ehours = $_POST['ehours'];
        $ecname = $_POST['ecname'];
        $ecaddress = $_POST['ecaddress'];

        $conn = new mysqli('localhost', 'gbeauchamp1', 'gbeauchamp1', 'JobFairDB');

        if ($conn->connect_error) {  
            die("Connection failed: " . $conn->connect_error);  
        }

        $sql = "UPDATE jobPost 
        SET major = '$emajor', requirements = '$erequirements', jobID = '$ejobID', jobMode = '$ejobMode', title = '$etitle', salary = '$esalary', hours = '$ehours', cname ='$ecname', caddreess = '$ecaddress' 
        WHERE jobPost.major = '$major' and jobPost.title = '$title' and jobPost.cname = '$cname'";
   

        if ($conn->query($sql) === TRUE) {  
            header('Location: edit.php'); 
            exit();
        } 
        else {  
            echo "Error: " . $sql . "<br>" . $conn->error;  
        }  
        mysqli_close($conn);
        header('Location: edit.php'); 
        exit();      
    }
    else if(isset($_POST['LoginInfo'])) {
        $email = $_POST['email'];
        $lusername = $_POST['lusername'];
        $lpassword = $_POST['lpassword'];
        $eemail = $_POST['eemail'];
        $elusername = $_POST['elusername'];
        $elpassword = $_POST['elpassword'];

        $conn = new mysqli('localhost', 'gbeauchamp1', 'gbeauchamp1', 'JobFairDB');

        if ($conn->connect_error) {  
            die("Connection failed: " . $conn->connect_error);  
        }

        $sql = "UPDATE LoginInfo
                SET email = '$eemail', user_name= '$elusername', password = '$elpassword'
                WHERE email = '$email' and user_name = '$lusername' and password = '$lpassword'";
        if ($conn->query($sql) === TRUE) {  
            header('Location: edit.php'); 
            exit();
        } 
        else {  
            echo "Error: " . $sql . "<br>" . $conn->error;  
        }  
        mysqli_close($conn);
        header('Location: edit.php'); 
        exit();      
    }
    else if(isset($_POST['majors'])) {
        $mname = $_POST['mname'];
        $emname = $_POST['emname'];
        $conn = new mysqli('localhost', 'gbeauchamp1', 'gbeauchamp1', 'JobFairDB');

        if ($conn->connect_error) {  
            die("Connection failed: " . $conn->connect_error);  
        }

        $sql = "UPDATE majors
            SET name = '$emname'
            WHERE name = '$mname'";
        if ($conn->query($sql) === TRUE) {  
            header('Location: edit.php'); 
            exit();
        } 
        else {  
            echo "Error: " . $sql . "<br>" . $conn->error;  
        }  
        mysqli_close($conn);
        header('Location: edit.php'); 
        exit();      
    }
    else{
        header('Location: adminHome.php?error=*Unable to add to table');
        exit();
    }
}
?>
