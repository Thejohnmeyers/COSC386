<?php
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
        <main>
            <form method="POST">
                <label for="tables">Select table you want to add too:</label>
                <select id="tables" name="tables">
                    <option value="a"> </option>
                    <option value="adminLogin">adminLogin</option>
                    <option value="Company">Company</option>
                    <option value="Contact_info">Contact_info</option>
                    <option value="FullTime">FullTime</option>
                    <option value="Internship">Internship</option>
                    <option value="jobFair">jobFair</option>
                    <option value="jobPost">jobPost</option>
                    <option value="LoginInfo">LoginInfo</option>
                    <option value="logos">logos</option>
                    <option value="majors">majors</option>
                </select>
                <input type="submit" value="Select Table">
            </form>

            <?php
            if(isset($_POST['tables'])){
                $selected_table = $_POST['tables'];
                $conn = new mysqli('localhost', 'gbeauchamp1', 'gbeauchamp1', 'JobFairDB');
                if ($conn->connect_error) {  
                    die("Connection failed: " . $conn->connect_error);  
                }
                switch($selected_table){
                    case 'a':
                        break;
                    case 'adminLogin':
                            ?>
                        </form>
                        <p>Enter in the following infomation to be added to the table adminLogin:</p>
                        <form method="POST" action="addConn.php">
                            <label for="ausername">Username:</label>
                            <input type="text" id="ausername" name="ausername" required>
                            <label for="apassword">Password:</label>
                            <input type="text" id="apassword" name="apassword" required>
                            <input type="submit" name="adminLogin" value="Add Data">
                        <?php
                        $query="SELECT * FROM adminLogin";
                        $r=mysqli_query($conn, $query);
                        echo "<table border='1'>
                            <thead>
                                <tr>
                                    <th> user_name </th>
                                    <th> password </th>
                            </tr>
                            </thead>";
                        while($row=mysqli_fetch_array($r)){
                        echo "<tr>";
                        echo "<td>" . $row['user_name'] . "</td>";
                        echo "<td>" . $row['password'] . "</td>";
                        echo "</tr>";
                        }
                        echo "</table>";
                        mysqli_close($connection);
                        break;
                    case 'Company':
                        ?>
                        <p>Enter in the following infomation to be added to the table Company:</p>
                        <form method="post" action="addConn.php">
                            <label for="name">name:</label>
                            <input type="text" id="cname" name="cname" required>
                            <label for="address">address:</label>
                            <input type="text" id="caddress" name="caddress" required>
                            <input type="submit" name="Company" value="Add Data">
                        </form>
                        <?php
                        $query="SELECT * FROM Company";
                        $r=mysqli_query($conn, $query);
                        echo "<table border='1'>
                            <thead>
                                <tr>
                                    <th> name </th>
                                    <th> address </th>
                            </tr>
                            </thead>";
                        while($row=mysqli_fetch_array($r)){
                        echo "<tr>";
                        echo "<td>" . $row['name'] . "</td>";
                        echo "<td>" . $row['address'] . "</td>";
                        echo "</tr>";
                        }
                        echo "</table>";
                        mysqli_close($connection);
                        break;
                    case 'Contact_info':
                        ?>
                        <p>Enter in the following infomation to be added to the table Contact_info:</p>
                        <form method="post" action="addConn.php">
                            <label for="phoneNu">Phone Number:</label>
                            <input type="text" id="phoneNu" name="phoneNu" required>
                            <label for="email">email:</label>
                            <input type="text" id="email" name="email" required>
                            <label for="socMedia">Social Media:</label>
                            <input type="text" id="socMedia" name="socMedia" required>
                            <label for="website">website:</label>
                            <input type="text" id="website" name="website" required>
                            <label for="cname">cname:</label>
                            <input type="text" id="cname" name="cname" required>
                            <input type="submit" name="Contact_info" value="Add Data">
                        </form>
                        <?php
                        $query="SELECT * FROM Contact_info";
                        $r=mysqli_query($conn, $query);
                        echo "<table border='1'>
                            <thead>
                                <tr>
                                    <th> phoneNu </th>
                                    <th> email </th>
                                    <th> socMedia </th>
                                    <th> website </th>
                                    <th> cname </th>
                            </tr>
                            </thead>";
                        while($row=mysqli_fetch_array($r)){
                        echo "<tr>";
                        echo "<td>" . $row['phoneNu'] . "</td>";
                        echo "<td>" . $row['email'] . "</td>";
                        echo "<td>" . $row['socMedia'] . "</td>";
                        echo "<td>" . $row['website'] . "</td>";
                        echo "<td>" . $row['cname'] . "</td>";
                        echo "</tr>";
                        }
                        echo "</table>";
                        mysqli_close($conn);
                        break;
                    case 'FullTime':
                            ?>
                            <p>Enter in the following infomation to be added to the table FullTime:</p>
                            <form method="post" action="addConn.php">
                                <label for="major">major:</label>
                                <input type="text" id="Fmajor" name="Fmajor" required>
                                <label for="requirements">requirements:</label>
                                <input type="text" id="requirements" name="requirements" required>
                                <label for="jobID">jobID:</label>
                                <input type="text" id="jobID" name="jobID" required>
                                <label for="jobMode">Job Mode:</label>
                                <input type="text" id="jobMode" name="jobMode" required>
                                <label for="title">Job Title:</label>
                                <input type="text" id="title" name="title" required>
                                <label for="salary">salary:</label>
                                <input type="text" id="salary" name="salary" required>
                                <label for="hours">hours:</label>
                                <input type="text" id="hours" name="hours" required>
                                <label for="cname">cname:</label>
                                <input type="text" id="cname" name="cname" required>
                                <label for="caddress">caddress:</label>
                                <input type="text" id="caddress" name="caddress" required>
                                <label for="benefits">benefits:</label>
                                <input type="text" id="benefits" name="benefits" required>
                                <input type="submit" name="FullTime" value="Add Data">
                            </form>
                            <?php
                            $query="SELECT * FROM FullTime";
                            $r=mysqli_query($conn, $query);
                            echo "<table border='1'>
                                <thead>
                                    <tr>
                                        <th> major </th>
                                        <th> requirements </th>
                                        <th> jobID </th>
                                        <th> jobMode </th>
                                        <th> title </th>
                                        <th> salary </th>
                                        <th> hours </th>
                                        <th> cname </th>
                                        <th> caddress </th>
                                        <th> benefits </th>
                                </tr>
                                </thead>";
                            while($row=mysqli_fetch_array($r)){
                            echo "<tr>";
                            echo "<td>" . $row['major'] . "</td>";
                            echo "<td>" . $row['requirements'] . "</td>";
                            echo "<td>" . $row['jobID'] . "</td>";
                            echo "<td>" . $row['jobMode'] . "</td>";
                            echo "<td>" . $row['title'] . "</td>";
                            echo "<td>" . $row['salary'] . "</td>";
                            echo "<td>" . $row['hours'] . "</td>";
                            echo "<td>" . $row['cname'] . "</td>";
                            echo "<td>" . $row['caddreess'] . "</td>";
                            echo "<td>" . $row['benefits'] . "</td>";
                            echo "</tr>";
                            }
                            echo "</table>";
                            mysqli_close($conn);
                            break;
                        case 'Internship':
                            ?>
                            <p>Enter in the following infomation to be added to the table Internship:</p>
                            <form method="post" action="addConn.php">
                                <label for="major">major:</label>
                                <input type="text" id="major" name="Imajor" required>
                                <label for="requirements">requirements:</label>
                                <input type="text" id="requirements" name="requirements" required>
                                <label for="jobID">jobID:</label>
                                <input type="text" id="jobID" name="jobID" required>
                                <label for="jobMode">Job Mode:</label>
                                <input type="text" id="jobMode" name="jobMode" required>
                                <label for="title">Job Title:</label>
                                <input type="text" id="title" name="title" required>
                                <label for="salary">salary:</label>
                                <input type="text" id="salary" name="salary" required>
                                <label for="hours">hours:</label>
                                <input type="text" id="hours" name="hours" required>
                                <label for="cname">cname:</label>
                                <input type="text" id="cname" name="cname" required>
                                <label for="caddress">caddress:</label>
                                <input type="text" id="caddress" name="caddress" required>
                                <label for="timeFrame">time frame:</label>
                                <input type="text" id="timeFrame" name="timeFrame" required>
                                <input type="submit" name="Internship" value="Add Data">
                            </form>
                            <?php
                            $query="SELECT * FROM Internship";
                            $r=mysqli_query($conn, $query);
                            echo "<table border='1'>
                                <thead>
                                    <tr>
                                        <th> major </th>
                                        <th> requirements </th>
                                        <th> jobID </th>
                                        <th> jobMode </th>
                                        <th> title </th>
                                        <th> salary </th>
                                        <th> hours </th>
                                        <th> cname </th>
                                        <th> caddress </th>
                                        <th> timeFrame </th>
                                </tr>
                                </thead>";
                            while($row=mysqli_fetch_array($r)){
                            echo "<tr>";
                            echo "<td>" . $row['major'] . "</td>";
                            echo "<td>" . $row['requirements'] . "</td>";
                            echo "<td>" . $row['jobID'] . "</td>";
                            echo "<td>" . $row['jobMode'] . "</td>";
                            echo "<td>" . $row['title'] . "</td>";
                            echo "<td>" . $row['salary'] . "</td>";
                            echo "<td>" . $row['hours'] . "</td>";
                            echo "<td>" . $row['cname'] . "</td>";
                            echo "<td>" . $row['caddreess'] . "</td>";
                            echo "<td>" . $row['timeFrame'] . "</td>";
                            echo "</tr>";
                            }
                            echo "</table>";
                            mysqli_close($conn);
                            break;
                        case 'jobFair':
                            ?>
                            <p>Enter in the following infomation to be added to the table jobFair:</p>
                            <form method="post" action="addConn.php">
                                <label for="date">date:</label>
                                <input type="text" id="date" name="date" required>
                                <label for="location">location:</label>
                                <input type="text" id="location" name="location" required>
                                <input type="submit" name='jobFair' value="Add Data">
                            </form>
                            <?php
                            $query="SELECT * FROM jobFair";
                            $r=mysqli_query($conn, $query);
                            echo "<table border='1'>
                                <thead>
                                    <tr>
                                        <th> date </th>
                                        <th> location </th>
                                </tr>
                                </thead>";
                            while($row=mysqli_fetch_array($r)){
                            echo "<tr>";
                            echo "<td>" . $row['date'] . "</td>";
                            echo "<td>" . $row['location'] . "</td>";
                            echo "</tr>";
                            }
                            echo "</table>";
                            mysqli_close($conn);
                            break;
                        case 'jobPost':
                            ?>
                            <p>Enter in the following infomation to be added to the table jobPost:</p>
                            <form method="post" action="addConn.php">
                                <label for="major">major:</label>
                                <input type="text" id="major" name="major" required>
                                <label for="requirements">requirements:</label>
                                <input type="text" id="requirements" name="requirements" required>
                                <label for="jobID">jobID:</label>
                                <input type="text" id="jobID" name="jobID" required>
                                <label for="jobMode">Job Mode:</label>
                                <input type="text" id="jobMode" name="jobMode" required>
                                <label for="title">Job Title:</label>
                                <input type="text" id="title" name="title" required>
                                <label for="salary">salary:</label>
                                <input type="text" id="salary" name="salary" required>
                                <label for="hours">hours:</label>
                                <input type="text" id="hours" name="hours" required>
                                <label for="cname">cname:</label>
                                <input type="text" id="cname" name="cname" required>
                                <label for="caddress">caddress:</label>
                                <input type="text" id="caddress" name="caddress" required>
                                <input type="submit" name="jobPost" value="Add Data">
                            </form>
                            <?php
                            $query="SELECT * FROM jobPost";
                            $r=mysqli_query($conn, $query);
                            echo "<table border='1'>
                                <thead>
                                    <tr>
                                        <th> major </th>
                                        <th> requirements </th>
                                        <th> jobID </th>
                                        <th> jobMode </th>
                                        <th> title </th>
                                        <th> salary </th>
                                        <th> hours </th>
                                        <th> cname </th>
                                        <th> caddress </th>
                                </tr>
                                </thead>";
                            while($row=mysqli_fetch_array($r)){
                            echo "<tr>";
                            echo "<td>" . $row['major'] . "</td>";
                            echo "<td>" . $row['requirements'] . "</td>";
                            echo "<td>" . $row['jobID'] . "</td>";
                            echo "<td>" . $row['jobMode'] . "</td>";
                            echo "<td>" . $row['title'] . "</td>";
                            echo "<td>" . $row['salary'] . "</td>";
                            echo "<td>" . $row['hours'] . "</td>";
                            echo "<td>" . $row['cname'] . "</td>";
                            echo "<td>" . $row['caddreess'] . "</td>";
                            echo "</tr>";
                            }
                            echo "</table>";
                            mysqli_close($conn);
                            break;
                        case 'LoginInfo':
                            ?>
                            <p>Enter in the following infomation to be added to the table LoginInfo:</p>
                            <form method="post" action="addConn.php">
                                <label for="email">email:</label>
                                <input type="text" id="email" name="email" required>
                                <label for="user_name">username:</label>
                                <input type="text" id="username" name="lusername" required>
                                <label for="password">password:</label>
                                <input type="text" id="password" name="lpassword" required>
                                <input type="submit" name="LoginInfo" value="Add Data">
                            </form>
                            <?php
                            $query="SELECT * FROM LoginInfo";
                            $r=mysqli_query($conn, $query);
                            echo "<table border='1'>
                                <thead>
                                    <tr>
                                        <th> email </th>
                                        <th> username </th>
                                        <th> password </th>
                                </tr>
                                </thead>";
                            while($row=mysqli_fetch_array($r)){
                            echo "<tr>";
                            echo "<td>" . $row['email'] . "</td>";
                            echo "<td>" . $row['user_name'] . "</td>";
                            echo "<td>" . $row['password'] . "</td>";
                            echo "</tr>";
                            }
                            echo "</table>";
                            mysqli_close($conn);
                            break;
                        case 'logos':
                            ?>
                            <p>Enter in the following infomation to be added to the table majors:</p>
                            <form method="post" action="addConn.php" enctype="multipart/form-data">
                                <input type="file" name="fileToUpload" id="fileToUpload">
                                <label for="cname">cname:</label>
                                <input type="text" id="cname" name="cname" required>
                                <input type="submit" name="logos" value="Add Data">
                            </form>
                            <?php
                            break;
                        case 'majors':
                            ?>
                            <p>Enter in the following infomation to be added to the table logos:</p>
                            <form method="post" action="addConn.php">
                                <label for="name">major:</label>
                                <input type="text" id="mname" name="mname" required>
                                <input type="submit" name="majors" value="Add Data">
                            </form>
                            <?php
                            $query="SELECT * FROM majors";
                            $r=mysqli_query($conn, $query);
                            echo "<table border='1'>
                                <thead>
                                    <tr>
                                        <th> name </th>
                                </tr>
                                </thead>";
                            while($row=mysqli_fetch_array($r)){
                            echo "<tr>";
                            echo "<td>" . $row['name'] . "</td>";
                            echo "</tr>";
                            }
                            echo "</table>";
                            mysqli_close($conn);
                            break;
                }
            }
            ?>

        </main>
        <a href="adminHome.php">Back</a>
        <a href="index.php">user login</a>

    </body>
    </html>
    <?php
}
else{
    header("Location: AdminIndex.php");
    exit();
}
?>