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

.header {
grid-area: header;
padding: 20px;
text-align: center;
font-size: 25px;
}

.grid-container {
    display: grid;
    grid-template-areas:
	'header header header header header header'
	'left left middle middle middle middle'
	'footer footer footer footer footer footer';
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

.middle {
    grid-area: middle;
}

.link {
    background: none;
    border: none;
    text-decoration: none;
    font: inherit;
    font-size: 25px;
    cursor: pointer;
    color: white;
    padding: 0;
}

.dropdown.active > .link,
.link:hover {
    color: #ffae33
}

.dropdown {
    position: relative;
    color: white;
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
    margin: auto;
    font-size: 0.9em;
    width: 60%;
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

@media (max-width: 600px) {
  .grid-container {
     grid-template-areas:
	'header header header header header header'
	'left left left left left left'
	'middle middle middle middle middle middle'
	'right right right right right right'
	'footer footer footer footer footer footer';
     }
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
	//print "<p>Successfully connected to MySQL server...</p>";
}

$query="select logo, jobPost.cname, title, major from logos join jobPost where logos.cname = jobPost.cname;";
$logo="select logo from Companies";
$r=mysqli_query($connection, $query);
?>
<div class="grid-container">
<span class="header">Search: <p> Major: <input type="text" id="txt1"></p>
	<div class="dropdown" data-dropdown>
	<button class="link" data-dropdown-button>Major</button>
        <div class="dropdown-menu information-grid">
            <div class="dropdown-links" name="major">
	    <a value = "Computer Science" href="#" class="link">Computer Science</a>
            <a value = "Finance" href="#" class="link">Finance</a>
            <a value = "Accounting" href="#" class="link">Accounting</a>
            <a value = "Data Science" href="#" class="link">Data Science</a>
            <a value = "Math" href="#" class="link">Math</a>
            </div>
	</div>
    </div></span>

<script>
function showHint(str) {
	if (str == "") {
		dcument.getElementById("txtHint").innerHTML = "";
		return;
	}
		const xhttp = new XMLHttpRequest();
		xhttp.onload = function() {
			document.getElementById("p1").innerHTML = 
			this.responseText;
		}
		xhttp.open("GET", "text.php?q="+str);
		xhttp.send();
	}
	</script>
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
	<div class = "middle">
	<table id = "database" class="content-table">
        <thead>
            <tr>
		<th><img src="logos/su3.png" width="75" height="25"></th>
            	<th><button id = "CompN" class="table-button" >Company Name </button></th>
                <th><button id = "JobT" class="table-button" >Job Title</button></th>
		<th><button id = "Major" class="table-button" >Major</button></th>
		
            </tr>
	</thead>
	<tbody>
<?php

$major = $_POST['major'];
echo "$major";
if ($major != "")
{
	

}

else
{
$r=mysqli_query($connection, $query);
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
</table>
</div>
</div>";

mysqli_close($connection);

}

?>
<?php
 
 /*$r=mysqli_query($connection, $query);
while ($row=mysqli_fetch_array($r))
{
    echo "<tr>
    		<td><img src='logos/{$row['logo']}' width='25' height='25'</td>
    		<td>{$row['cname']}</td>
    		<td>{$row['title']}</td>
    		<td>{$row['major']}</td>
    	</tr>";
}

echo "<script>
	$(document).on('click', '#database th', function() {
		var newOrder = $(this).index() + 1;

		$.ajax({
			url: 'text.php',
			type: 'POST',
			data: { major: $(this).data('major'), newOrder: newOrder },
			success: function(response) {
				$('#database').html(response);
			}
		});
	});
	</script>";

echo "</tbody>
</table>
</div>
</div>";

mysqli_close($connection);
 */?>
    
</body>
</html>