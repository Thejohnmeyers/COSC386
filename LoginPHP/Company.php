<?php
session_start();
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

if(isset($_SESSION['email']) && isset($_SESSION['user_name'])){
    ?>
<!doctype html>
<html>
<style>
body {
    margin: 0;
    font-family: Arial, Helvetica, sans-serif;
}

h1 { 
	color: blue; 
}

.p1 {
    font: inherit;
    font-size: large;
}

.p2 {
    font: inherit;
    font-size: medium;
}

.header {
    color: white;
    background-color: #862727;
    display: flex;
    align-items: baseline;
    padding: .5rem;
    gap: 1rem;
}

.link {
    background: none;
    border: none;
    text-decoration: none;
    font: inherit;
    font-size: 16px;
    cursor: pointer;
    padding: 0;
}

.dropdown.active > .link,
.link:hover {
    color: #ffae33
}

.dropdown {
    position: relative;
}

.dropdown-menu {
    position: absolute;
    left: 0;
    top: calc(100% + .25rem);
    background-color: #862727;
    padding: .75rem .5rem;
    border-radius: .25rem;
    box-shadow: 0 2px 5px 0 rgba(0, 0, 0, .1);
    opacity: 0;
    pointer-events: none;
    transform: translateY(-10px);
    transition: opacity 150ms ease-in-out, transform 150ms ease-in-out;
}

.dropdown.active > .link + .dropdown-menu {
    opacity: 1;
    transform: translateY(0);
    pointer-events: auto;
}

.information-grid {
    display: grid;
    font: Arial, Helvetica, sans-serif;
    font-size: 16px;
    grid-template-rows: repeat(1, max-content);
    gap: 2rem;
}

.dropdown-links {
    display: flex;
    font: Arial, Helvetica, sans-serif;
    font-size: 12px;
    flex-direction: column;
    gap: .75rem;
}

.dropdown-links a {
    color: white;
}

.content-table {
    border-collapse: collapse;
    margin: 25px 25px;
    font-size: 0.9em;
    min-width: 400px;
    border-radius: 5px;
    overflow: hidden;
    box-shadow: 0 0 20px rgba(0, 0, 0, .25)
}

.content-table thead tr {
    background-color: #862727;
    color: white;
    text-align: left;
    font-weight: bold;
}

.content-table th, .content-table td {
    padding: 12px 15px;
}

.content-table tbody tr {
    border-bottom: 1px solid #dddddd;
}

.content-table tbody tr:nth-of-type(even) {
    background-color: #f8f8f8;
}

.content-table tbody tr:last-of-type {
    border-bottom: 2px solid #862727;
}

.table-button {
	background: none!important;
	border: none;
	padding: 0!important;
	font-family: inherit;
	cursor: pointer;
	color: white;
	font-size: large;
	font-weight: bold;
}
</style>
<head>
	<meta charset="UTF-8">
   	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    	<meta name="viewport" content="width=device-width, initial-scale=1.0">
    	<title>PHP Implementation</title>
	<link rel="stylesheet" href="style.css">
	<script src="script.js" defer></script>
</head>
<body>
<link rel="stylesheet" href="style.css">
<?php
if ($connection = @mysqli_connect('localhost', 'lscott3', 'lscott3', 'JobFairDB'))
{
	print "<p>Successfully connected to MySQL server...</p>";
}

$query="select logo, jobPost.cname, title, major from logos join jobPost where logos.cname = jobPost.cname;";
$logo="select logo from Companies";
$r=mysqli_query($connection, $query);
?><span class="p1">Search
	<div class="dropdown" data-dropdown>
        <button class="link" data-dropdown-button>Major</button>
        <div class="dropdown-menu information-grid">
            <div class="dropdown-links">
            <a href="#" class="link">Computer Science</a>
            <a href="#" class="link">Finance</a>
            <a href="#" class="link">Accounting</a>
            <a href="#" class="link">Data Science</a>
            <a href="#" class="link">Math</a>
            </div>
        </div>
    </div></span>
<!--	<script>
	var submitButton = document.getElementById('CompN');
	let buttonClicked = false;
	submitButton.addEventListener('click', function handleClick() {
	 console.log('button is clicked');
	 if (buttonClicked) {
		 console.log('button has already clicked');
		$query = "logo, jobPost.cname, title, major from logos join jobPost where logos.cname = jobPost.cname;";
	 }
	 else{
	$query = "logo, jobPost.cname, title, major from logos join jobPost where logos.cname = jobPost.cname order by jobPost.cname ASC;";
		buttonClicked = true;
	 }
	 })
	</script>-->
	<table id = "database" class="content-table">
        <thead>
            <tr>
		<th><img src="logos/su3.png" width="75" height="25"></th>
		<!--<th><input type="submit"name="CompN">Company Name</input></th>-->
            	<th><button id = "CompN" class="table-button" >Company Name </button></th>
                <th><button id = "JobT" class="table-button" >Job Title</button></th>
		<!--<th><input type="submit"name="Major">Major</input></th>-->
		<th><button id = "Major" class="table-button" >Major</button></th>
	<!--	<script>
			document.getElementById("CompN").addEventListener("click", function() {
				var xhr = new XMLHttpRequest();
				xhr.open("GET", "update_query.php?query=new_query", true);
				xhr.send();
		});
		</script>-->
		
            </tr>
	</thead>
	<tbody>
	

<!--<table border='5'>
        <thead>
	    <tr>
		<th></th>
                <th> Company Name </th>
                <th> Job Title </th>
                <th> Major </th>
            </tr>
	    </thead>"-->

<?php
/**/$r=mysqli_query($connection, $query);
while ($row=mysqli_fetch_array($r))
{
    echo "<tr>
    		<td><img src='logos/{$row['logo']}' width='25' height='25'</td>
    		<td>{$row['cname']}</td>
    		<td>{$row['title']}</td>
    		<td>{$row['major']}</td>
    	</tr>";
}

echo "</tbody>
</table>";

mysqli_close($connection);
?>
    
</body>
</html>

<?php
}
    else{
    header("Location: index.php");
    exit();
}
?>


