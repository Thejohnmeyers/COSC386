
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

        $conn = new mysqli('localhost', 'gbeauchamp1', 'gbeauchamp1', 'JobFairDB');

        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);  
            }

            $sql = "INSERT INTO adminLogin (user_name, password)  
                VALUES ('$ausername', '$apassword')";
            if ($conn->query($sql) === TRUE) { 
                 
                header('Location: add.php'); 
                exit();
            } 
            else {  
                echo "Error: " . $sql . "<br>" . $conn->error;  
            }  
            mysqli_close($conn);
            header('Location: add.php'); 
            exit();
    }

    else if(isset($_POST['Company'])) {
        $cname = $_POST['cname'];
        $caddress = $_POST['caddress'];

        $conn = new mysqli('localhost', 'gbeauchamp1', 'gbeauchamp1', 'JobFairDB');

        if ($conn->connect_error) {  
            die("Connection failed: " . $conn->connect_error);  
        }

        $sql = "INSERT INTO Company (name, address)  
            VALUES ('$cname', '$caddress')";
        if ($conn->query($sql) === TRUE) {  
            header('Location: add.php'); 
            exit();
        } 
        else {  
            echo "Error: " . $sql . "<br>" . $conn->error;  
        }  
        mysqli_close($conn);
        header('Location: add.php'); 
        exit();      
    }
    else if(isset($_POST['Contact_info'])) {
        $phoneNu = $_POST['phoneNu'];
        $email = $_POST['email'];
        $socMedia = $_POST['socMedia'];
        $website = $_POST['website'];
        $cname = $_POST['cname'];

        $conn = new mysqli('localhost', 'gbeauchamp1', 'gbeauchamp1', 'JobFairDB');

        if ($conn->connect_error) {  
            die("Connection failed: " . $conn->connect_error);  
        }

        $sql = "INSERT INTO Contact_info (phoneNu, email, socMedia, website, cname)  
            VALUES ('$phoneNu' , '$email' , '$socMedia' , '$website' , '$cname')";
        if ($conn->query($sql) === TRUE) {  
            header('Location: add.php'); 
            exit();
        } 
        else {  
            echo "Error: " . $sql . "<br>" . $conn->error;  
        }  
        mysqli_close($conn);
        header('Location: add.php'); 
        exit();      
    }
    else if(isset($_POST['FullTime'])) {
        $Fmajor = $_POST['Fmajor'];
        $requirements = $_POST['requirements'];
        $jobID = $_POST['jobID'];
        $jobMode = $_POST['jobMode'];
        $title = $_POST['title'];
        $salary = $_POST['salary'];
        $hours = $_POST['hours'];
        $cname = $_POST['cname'];
        $caddress = $_POST['caddress'];
        $benefits = $_POST['benefits'];

        $conn = new mysqli('localhost', 'gbeauchamp1', 'gbeauchamp1', 'JobFairDB');

        if ($conn->connect_error) {  
            die("Connection failed: " . $conn->connect_error);  
        }

        $sql = "INSERT INTO FullTime (major, requirements, jobID, jobMode, title, salary, hours, cname, caddreess, benefits)  
            VALUES ('$Fmajor' , '$requirements' , '$jobID' , '$jobMode' , '$title' ,'$salary' , '$hours' , '$cname' , '$caddress' , '$benefits')";
        if ($conn->query($sql) === TRUE) {  
            header('Location: add.php'); 
            exit();
        } 
        else {  
            echo "Error: " . $sql . "<br>" . $conn->error;  
        }  
        mysqli_close($conn);
        header('Location: add.php'); 
        exit();      
    }
    else if(isset($_POST['Internship'])) {
        $Imajor = $_POST['Imajor'];
        $requirements = $_POST['requirements'];
        $jobID = $_POST['jobID'];
        $jobMode = $_POST['jobMode'];
        $title = $_POST['title'];
        $salary = $_POST['salary'];
        $hours = $_POST['hours'];
        $cname = $_POST['cname'];
        $caddress = $_POST['caddress'];
        $timeFrame = $_POST['timeFrame'];

        $conn = new mysqli('localhost', 'gbeauchamp1', 'gbeauchamp1', 'JobFairDB');

        if ($conn->connect_error) {  
            die("Connection failed: " . $conn->connect_error);  
        }

        $sql = "INSERT INTO Internship (major, requirements, jobID, jobMode, title, salary, hours, cname, caddreess, timeFrame)  
            VALUES ('$Imajor' , '$requirements' , '$jobID' , '$jobMode' , '$title' ,'$salary' , '$hours' , '$cname' , '$caddress' , '$timeFrame')";
        if ($conn->query($sql) === TRUE) {  
            header('Location: add.php'); 
            exit();
        } 
        else {  
            echo "Error: " . $sql . "<br>" . $conn->error;  
        }  
        mysqli_close($conn);
        header('Location: add.php'); 
        exit();      
    }
    else if(isset($_POST['jobFair'])) {
        $date = $_POST['date'];
        $location = $_POST['location'];

        $conn = new mysqli('localhost', 'gbeauchamp1', 'gbeauchamp1', 'JobFairDB');

        if ($conn->connect_error) {  
            die("Connection failed: " . $conn->connect_error);  
        }

        $sql = "INSERT INTO jobFair (date, location)  
            VALUES ('$date', '$location')";
        if ($conn->query($sql) === TRUE) {  
            header('Location: add.php'); 
            exit();
        } 
        else {  
            echo "Error: " . $sql . "<br>" . $conn->error;  
        }  
        mysqli_close($conn);
        header('Location: add.php'); 
        exit();      
    }
    else if(isset($_POST['jobPost'])) {
        $major = $_POST['major'];
        $requirements = $_POST['requirements'];
        $jobID = $_POST['jobID'];
        $jobMode = $_POST['jobMode'];
        $title = $_POST['title'];
        $salary = $_POST['salary'];
        $hours = $_POST['hours'];
        $cname = $_POST['cname'];
        $caddress = $_POST['caddress'];

        $conn = new mysqli('localhost', 'gbeauchamp1', 'gbeauchamp1', 'JobFairDB');

        if ($conn->connect_error) {  
            die("Connection failed: " . $conn->connect_error);  
        }

        $sql = "INSERT INTO jobPost (major, requirements, jobID, jobMode, title, salary, hours, cname, caddreess)  
            VALUES ('$major' , '$requirements' , '$jobID' , '$jobMode' , '$title' ,'$salary' , '$hours' , '$cname' , '$caddress')";
        if ($conn->query($sql) === TRUE) {  
            header('Location: add.php'); 
            exit();
        } 
        else {  
            echo "Error: " . $sql . "<br>" . $conn->error;  
        }  
        mysqli_close($conn);
        header('Location: add.php'); 
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

        $sql = "INSERT INTO LoginInfo (email, user_name, password)  
            VALUES ('$email' , '$lusername' , '$lpassword')";
        if ($conn->query($sql) === TRUE) {  
            header('Location: add.php'); 
            exit();
        } 
        else {  
            echo "Error: " . $sql . "<br>" . $conn->error;  
        }  
        mysqli_close($conn);
        header('Location: add.php'); 
        exit();      
    }
    else if(isset($_POST['logos'])) {
        $cname = $_POST['cname'];
        $logo_path = 'uploads/' . basename($_FILES['fileToUpload']['name']);
        if(move_uploaded_file($_FILES['fileToUpload']['tmp_name'], $logo_path)) {
            $conn = new mysqli('localhost', 'gbeauchamp1', 'gbeauchamp1', 'JobFairDB');
            if ($conn->connect_error) {  
                die("Connection failed: " . $conn->connect_error);  
            }
            $sql = "INSERT INTO jobFair (logo, cname)  
                VALUES ('$logo_path', '$cname')";
            if ($conn->query($sql) === TRUE) {  
                mysqli_close($conn);
                header('Location: add.php'); 
                exit();
            } 
            else {  
                echo "Error: " . $sql . "<br>" . $conn->error;  
            }
        }
        else {
            echo "Error uploading file.";
        }
    }
    else if(isset($_POST['majors'])) {
        $mname = $_POST['mname'];
        $conn = new mysqli('localhost', 'gbeauchamp1', 'gbeauchamp1', 'JobFairDB');

        if ($conn->connect_error) {  
            die("Connection failed: " . $conn->connect_error);  
        }

        $sql = "INSERT INTO majors (name)  
            VALUES ('$mname')";
        if ($conn->query($sql) === TRUE) {  
            header('Location: add.php'); 
            exit();
        } 
        else {  
            echo "Error: " . $sql . "<br>" . $conn->error;  
        }  
        mysqli_close($conn);
        header('Location: add.php'); 
        exit();      
    }
    else{
        header('Location: add.php?error=*Unable to add to table');
        exit();
    }
}
?>